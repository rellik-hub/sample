<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = "courses";
    public $timestamps = false;
    protected $fillable = ['course_code', 'course_desription'];
}
