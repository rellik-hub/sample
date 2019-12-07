<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/logout', 'Logout@logout');
Route::get('/home',             'HomeController@index')->name('home');
Route::get('/scheduler',             'HomeController@scheduler');
Route::get('/checklist',       'HomeController@checklist');
Route::get('/faculty',               'HomeController@faculty');
Route::get('/section',         'HomeController@section');
Route::get('/programme',       'HomeController@programme');
Route::get('/room',            'HomeController@room');
Route::get('/course',          'HomeController@course');
Route::get('/department',      'HomeController@department');
Route::get('/college',         'HomeController@college');
Route::get('/task',                   'HomeController@task');
Route::get('/form',             'HomeController@form');
Route::get('/other-user-listing',             'HomeController@other_user_listing');
Route::get('/other-user-profile',             'HomeController@other_user_profile');
Route::get('/ui-button-icon',             'HomeController@ui_button_icon');
Route::get('/ui-typography',             'HomeController@ui_typography');


/*PAGES CONTROLLER ROUTES */
Route::get('/',                 'PagesController@welcome');
Route::get('/about',            'PagesController@about');
Route::get('/admin_layout',     'PagesController@admin_layout');

/*ADMIN PANEL ROUTES*/

Route::prefix('admin')->group(function() {
    Route::get('/index',                'AdminController@index');
    Route::get('/activity',             'AdminController@activity');
    Route::get('/charts',               'AdminController@charts');
    Route::get('/form',                 'AdminController@form');
    Route::get('/message',              'AdminController@message');
    Route::get('/other-login',          'AdminController@other_login')->name('admin.other_login');
    Route::get('/other-user-listing',   'AdminController@other_user_listing');
    Route::get('/other-user-profile',   'AdminController@other_user_profile');
    Route::get('/table',                'AdminController@table')->name('admin.table');
    Route::get('/task',                 'AdminController@task');
    Route::get('/ui-button-icon',       'AdminController@ui_button_icon');
    Route::get('/ui-typography',        'AdminController@ui_typography');
    Route::get('/room_table',           'AdminController@room_table')->name('admin.room_table');
    Route::get('/course_table',         'AdminController@course_table')->name('admin.course_table');
    Route::get('/college_table',        'AdminController@college_table')->name('admin.college_table');
    Route::get('/department_table',     'AdminController@department_table')->name('admin.department_table');
    Route::get('/scheduler',            'AdminController@scheduler')->name('admin.scheduler');
    Route::get('/checklist',            'AdminController@checklist')->name('checklist');
    Route::get('/programme_table',      'AdminController@programme_table')->name('programme_table');
    Route::get('/section_table',        'AdminController@section_table')->name('section_table');
});


    Route::resource('pds',              'PDSController');
    Route::resource('room_ctrl',        'RoomController');
    Route::resource('course_ctrl',      'CourseController');
    Route::resource('department_ctrl',  'DepartmentController'); 
    Route::resource('college_ctrl',     'CollegesController');
    Route::resource('checklist_ctrl',   'ChecklistController');
    Route::resource('programme_ctrl',   'ProgrammeController');
    Route::resource('section_ctrl',     'SectionController');
    Route::resource('schedule_ctrl',    'ScheduleController');
    Route::resource('checked_course_ctrl', 'Checked_course_id');
    Route::resource('setcourses_ctrl', 'SetCoursesController');



    Route::get('/index', 'SearchController@index');
    Route::get('/search', 'SearchController@search')->name('/search');
