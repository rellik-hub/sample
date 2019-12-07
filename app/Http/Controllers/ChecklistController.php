<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Checklist;
use DB;
use App\Courses;
use App\Programme;
use App\Checked_course_id;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::all();
        $programmes = Programme::all();
        return view ('checklist.checklist_add', compact('programmes', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programmes = Programme::all();
        //$courses = new Courses;
        //$checklist = new Checklist;
        $programme = $request->input('programme');
        $year_level = $request->input('year_level');
        $semester = $request->input('semester');
        $curriculum = $request->input('curriculum');
        $year = $request->input('year');
       
        $course_id = $request->input('course_id');
        $lecture = $request->input('lecture');
        $laboratory = $request->input('laboratory');
        $units = $request->input('unit');
        $data = array('programme' =>$programme,
                            'year_level'=>$year_level, 
                            'semester'=>$semester,
                            'curriculum'=>$curriculum,  
                            'year'=>$year);
     
/**-----------------------------------CHECKED COURSES-------------------------------------- */
         $last_id = DB::table('checklist')->insertGetId($data);
       foreach($units as $count => $subject_unit){
           $subjects = array('course_id' =>$course_id[$count],
                                    'checklist_id' => $last_id,
                                    'lecture' => $lecture[$count],
                                    'laboratory' => $laboratory[$count],
                                    'units' => $subject_unit);
         
        DB::table('checked_course_id')->insert($subjects);
       }
            //dd($subjects);
           // dd('last_id', 'checked_course');
            
        
        return redirect('/admin/checklist')->with('data saved successfully');
      
    }

    /** 
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show($id)  
    {
        $data = Checklist::find($id);

/*-----------------------------------JOINING--------------------------------------------------------*/
        $check = DB::table('checked_course_id')
                        ->join('checklist', 'checklist.id', '=', 'checked_course_id.checklist_id')
                        ->join('courses', 'courses.id', '=', 'checked_course_id.course_id')
                        ->select('courses.course_code', 'courses.course_desription', 'checked_course_id.lecture',
                         'checked_course_id.laboratory', 'checked_course_id.units', 'checklist.id')
                        ->where('checklist_id', $id)
                         ->get();
        
         return view('checklist.checklist_show', compact('data','check'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Courses::all();
        $programmes = Programme::all();
        $data = Checklist::find($id);

        $check = DB::table('checked_course_id')
                        ->join('checklist', 'checklist.id', '=', 'checked_course_id.checklist_id')
                        ->select('checked_course_id.course_id', 'checked_course_id.lecture',
                         'checked_course_id.laboratory', 'checked_course_id.units', 'checklist.id')
                        ->where('checklist_id', $data)
                         ->get();
        
        return view('checklist.checklist_edit', compact('data', 'programmes', 'courses', 'check'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courses = Courses::all();
        $programmes = Programme::all();
        $data = Checklist::find($id);
        $input = $request->all(); 
        $data->update($input);
        
        $check = DB::table('checked_course_id')
        ->join('checklist', 'checklist.id', '=', 'checked_course_id.checklist_id')
        ->select('checked_course_id.course_code', 'checked_course_id.course_description', 'checked_course_id.lecture',
         'checked_course_id.laboratory', 'checked_course_id.units', 'checklist.id')
        ->where('checklist_id', $id)
         ->get();

         
        $course_code = $request->input('course_code');
        $course_description = $request->input('course_description');
        $lecture = $request->input('lecture');
        $laboratory = $request->input('laboratory');
        $units = $request->input('unit');


       foreach($units as $count => $unit)
        {
            $course_input = array('course_code' =>$course_code[$count],
                                        'checklist_id' => $id,
                                        'course_description' => $course_description[$count],
                                        'lecture' => $lecture[$count],
                                        'laboratory' => $laboratory[$count],
                                        'units' => $unit);
            
                        DB::table('checked_course_id')->update($course_input, $check);
        }


       

        return redirect('/admin/checklist')->with('data updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function destroy($id)
    {
        $data = Checklist::find($id);
        $data->delete();
        DB::table('checked_course_id')->where('checklist_id', $id)->delete();
        return redirect()->route('checklist')->with('success','Data deleted successfully');
    }

    public function search(Request $request){
        $programmes = Programme::all();
        $search = $request->get('search');
        $post = new Courses;
        $post = Courses::where('course_code', 'like', '%'.$search.'%')
                                    ->orWhere('course_desription', 'like', '%'.$search.'%')
                                    ->paginate(10);
        return view('checklist.checklist_add', ['post' => $post]);
    }


}
 