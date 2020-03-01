<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colleges extends Model
{
    protected $table = "colleges";
    public $timestamps = false;
    protected $fillable = [
        'college_acronym', 'college_description'];
}
