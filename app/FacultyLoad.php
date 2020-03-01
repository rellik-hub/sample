<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyLoad extends Model
{
    protected $table = "facultyload";
    public $timestamps = false;
    protected $fillable = [
        'course_code', 'course_description', 'days', 'class_type', 'from_time', 'to_time', 'room', 'faculty_id'];
}
