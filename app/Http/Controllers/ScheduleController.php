<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programme;
use App\Schedule;
use App\Checklist;
use App\Courses;
use App\Section;
use App\SetCourses;
use App\Checked_course_id;
use App\PersonalDataSheet;
use App\Room;
use App\schedule_subject;
use DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = PersonalDataSheet::all();
        $programmes = Programme::all();
        $rooms = Room::all();
        $checklist = Checklist::all();
        $checked_course_id = Checked_course_id::all();
        $section = Section::all();
        $schedule_subject = Schedule_subject::all();
        

        $check = DB::table('checked_course_id')
                    ->join('checklist', 'checklist.id', '=', 'checked_course_id.checklist_id')
                    ->join('courses', 'courses.id', '=', 'checked_course_id.course_id')
                    ->select('courses.course_code', 'courses.course_desription', 'checked_course_id.lecture',
                    'checked_course_id.laboratory', 'checked_course_id.units', 'checklist.id', 'checked_course_id.course_id')
                    ->get();
                    
      

        return view ('scheduler.schedule_add', compact('rooms', 'schedule_subject', 'programmes', 'faculty', 'checklist', 'checked_course_id', 'check', 'section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)/**---------------------------------------------------------------------------- */
    {
        $rooms = Room::all();
        $faculty = PersonalDataSheet::all();

 

/**---------------------------store data--------------------------------------------------------------------------- */
        $programme = $request->input('programme');
        $year_level = $request->input('year_level');
        $semester = $request->input('semester');
        $year = $request->input('year');
        $schedule = array('programme' => $programme, 'year_level' => $year_level, 'semester' => $semester, 'year' => $year);


    /**----------get inserted id-------------- */        
        $last_id = DB::table('schedule')->insertGetId($schedule);


/**-------------------------------------get checklist id ------------------------------------------------ */
        $check_id = DB::table('checklist')->where('programme', $request->programme)
                                          ->where('year_level', $request->year_level)
                                          ->where('semester', $request->semester)
                                          ->select('id')->first();                                  



/**-----------------------------------find courses----------------------------------------------------------------------- */
$find_courses = DB::table('checked_course_id')->join('checklist', 'checklist.id', '=', 'checked_course_id.checklist_id')
                                        ->select('checked_course_id.course_code', 'checked_course_id.course_description', 'checked_course_id.lecture',
                                        'checked_course_id.laboratory', 'checked_course_id.units', 'checklist.id')
                                        ->where('checklist_id', $check_id->id)
                                        ->get();

 
/**---------------------------------generating EDB code ----------------------------------------------------- */   
                      
        

        return view('scheduler.schedule_subject', compact('find_courses', 'rooms', 'faculty'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Schedule::find($id);
        return view('scheduler.schedule_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programmes = Programme::all();
        $data = Schedule::find($id);
        return view('scheduler.schedule_edit', compact('data', 'programmes'));
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
        $data = Schedule::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('/admin/scheduler')->with('data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Schedule::find($id);
        $data->delete();
        return redirect()->route('/admin/scheduler')->with('success','Data deleted successfully');
    }

    public function schedule_subject(Request $request){

    }
}
