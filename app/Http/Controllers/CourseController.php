<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Courses;
use DB;


class CourseController extends Controller
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
        return view ('courses.course_add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Courses::create($request->all());
        return redirect('/admin/course_table')->with('data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = Courses::find($id);
        return view('courses.course_show', compact('data')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Courses::find($id);
        return view('courses.course_edit', compact('data'));
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
        $data = Courses::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('/admin/course_table')->with('data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Courses::find($id);
        $data->delete();
        return redirect()->route('admin.course_table')->with('success','Data deleted successfully');
    }

    public function action(Request $request)
    {
      
        if($request->ajax())
        {
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('courses')
                            ->where('course_code', 'like', '%'.$query.'%')
                            ->orWhere('course_desription', 'like', '%'.$query.'%')
                            ->get();
            }
            else
            {
                $data = DB::table('courses')
                            ->orderBy('course_code', 'course_desription')
                            ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                        <tr>
                            <td>'.$row->course_code.'</td>
                            <td>'.$row->course_desription.'</td>
                        </tr>
                    ';
                }
            }
            else
            {
                $output = '
                <tr>
                    <td style="text-align:center; colspan:5;">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_data
            );

            echo json_encode($data);

        }
    }
}
