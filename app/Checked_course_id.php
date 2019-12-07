<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checked_course_id extends Model
{
    protected $table = "checked_course_id";

    protected $fillable = [
        'course_id', 'checklist_id'];


  /**relationship has-one */      
    
}
 