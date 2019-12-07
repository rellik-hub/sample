<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule_subject extends Model
{
    protected $table = "schedule_subject";

    protected $fillable = [
        'edb_code', 'course_code', 'course_description', 'days', 'class_type', 'room', 'faculty', 'from_time', 'to_time'];
}
