<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SetCoursesController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            
            $edp_code = $request->input('edp_code');
            $days = $request->input('days');
            $start_hour = $request->input('start_hour');
            $start_min = $request->input('start_min');
            $end_hour = $request->input('end_hour');
            $end_min = $request->input('end_min');
            $room = $request->input('room');
            $faculty = $request->input('faculty');
            $checklist_id = $request->input('checklist_id');
            $course_id = $request->input('course_id');
            $units = $request->input('units');
            $section = $request->input('section_id');
            $class_type = $request->input('class_type');

            
           
            foreach($days as $day)
            {
               
                $set_courses = array('course_id' => $course_id, 'units' => $units, 
                    'class_type' => $class_type, 'section_id' => $section,
                    'start_hour' => $start_hour, 'start_min' => $start_min, 
                    'end_hour' => $end_hour, 'end_min' => $end_min,
                    'days' => $day, 'room' => $room,
                    'faculty' => $faculty, 'edp_code' => $edp_code,
                    'checklist_id' => $checklist_id 
                );

                DB::table('schedule_subject')->insert($set_courses);
            }
            //dd($inserted_id, $week_days);
            
            session()->flash('message', 'success');
            return url('scheduler/schedule_add');
       
           
    
      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
