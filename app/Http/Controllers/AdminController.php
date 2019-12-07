<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDataSheet;
use App\Room;
use App\Courses;
use App\Colleges;
use App\Department;
use App\Programme;
use App\Checklist;
use App\Checked_course_id;
use App\Section;
use App\Schedule;

class AdminController extends Controller
{
    public function activity () {
        return view ('admin panel.activity');
    }


    public function charts () {
        return view ('admin panel.charts');
    }

    public function form () {
        $colleges = Colleges::all();
        $department = Department::all();
        return view ('admin panel.form', compact('colleges', 'department'));
    }


    public function index () {
        return view ('admin panel.index');
    }

    public function message () {
        return view ('admin panel.message');
    }

    public function other_login () {
        return view ('admin panel.other-login');
    }

    public function other_user_listing () {
        return view ('admin panel.other-user-listing');
    }

    public function other_user_profile () {
        return view ('admin panel.other-user-profile');
    }


    public function task () {
        return view ('admin panel.task');
    }

    public function ui_button_icon () {
        return view ('admin panel.ui-button-icon');
    }

    public function ui_typography () {
        return view ('admin panel.ui-typography');
    }

    

    public function course_table (Request $request){
        $programmes = Programme::all();
        $data = Courses::all();
        return view('admin panel.course_table', compact('data', 'programmes'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    public function department_table (Request $request){
        $data = Department::all();
        return view('admin panel.department_table', compact('data'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    public function room_table (Request $request){
        $rooms = Room::paginate(15);
        return view('admin panel.room_table', compact('rooms'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    public function college_table (Request $request){
        $post = Colleges::paginate(10);
        return view('admin panel.college_table', compact('post'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    public function section_table (Request $request){
        $programmes = Programme::all();
        $data = Section::all();
        return view('admin panel.section_table', compact('data', 'programmes'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    
    public function table (Request $request){
        $data = PersonalDataSheet::all();
        return view('admin panel.table', compact('data'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    public function checklist (Request $request) {
        $programmes = Programme::all();
        $courses = Courses::all();
        $checked = Checked_course_id::all();
        $data = Checklist::all();
        return view('admin panel.checklist', compact('data', 'programmes', 'courses', 'checked'))->with('i', ($request->input('page', 1) - 1) *5);
    }
  
    
    public function scheduler (Request $request){
        $programmes = Programme::all();
        $data = Schedule::paginate(15);
        return view('admin panel.scheduler', compact('data', 'programmes'))->with('i', ($request->input('page', 1) - 1) *5);
    
    }

    public function programme_table (Request $request){
        //$department = Programme::all();
        $department = Department::all();
        $data = Programme::paginate(15);
        return view('admin panel.programme_table', compact('data', 'department'))->with('i', ($request->input('page', 1) - 1) *5);
    }








    public function schedule_sample (){
        return view ('admin panel.schedule_sample');
    }

    
    public function sample_table (Request $request){
        $data = Sample::all();
        return view('admin panel.sample_table', compact('data'))->with('i', ($request->input('page', 1) - 1) *5);
    }

    public function table_sample (Request $request){
        $data = PersonalDataSheet::all();
        return view('admin panel.table', compact('data'))->with('i', ($request->input('page', 1) - 1) *5);
    }
    
  

}
