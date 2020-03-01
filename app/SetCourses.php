<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetCourses extends Model
{
    protected $table = "setcourses";
    public $timestamps = false;
    protected $fillable = [
        'checklist_id', 'course_code', 'course_description',
         'days', 'class_type', 'from_time', 'to_time', 'room', 'faculty'];
}
