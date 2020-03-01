<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('admin panel.index');
    }

    public function scheduler()
    {
        return view('admin panel.scheduler');
    }

    public function checklist()
    {
        return view('admin panel.checklist_table');
    }

    public function college()
    {
        return view('admin panel.college_table');
    }

    public function course()
    {
        return view('admin panel.course_table');
    }

    public function department()
    {
        return view('admin panel.department_table');
    }

    public function programme()
    {
        return view('admin panel.programme_table');
    }

    public function room()
    {
        return view('admin panel.room_table');
    }

    public function section()
    {
        return view('admin panel.section_table');
    }

    public function faculty()
    {
        return view('admin panel.table');
    }

    public function activity()
    {
        return view('admin panel.activity');
    }

    public function form()
    {
        return view('admin panel.form');
    }

    public function other_user_listing()
    {
        return view('admin panel.other-user-listing');
    }

    public function other_user_profile()
    {
        return view('admin panel.other-user-profile');
    }

    public function task()
    {
        return view('admin panel.task');
    }

    public function ui_button_icon()
    {
        return view('admin panel.ui-button-icon');
    }

    public function ui_typography()
    {
        return view('admin panel.ui-typography');
    }

}
