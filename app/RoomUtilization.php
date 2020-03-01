<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomUtilization extends Model
{
    protected $table = "roomutilization";
    public $timestamps = false;
    protected $fillable = [
        'course_code', 'course_description', 'days', 'class_type', 'from_time', 'to_time', 'room', 'faculty_id'];
}
