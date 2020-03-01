<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedule";
    public $timestamps = false;
    protected $fillable = [
        'programme', 'year_level', 'semester', 'section', 'year'];
}
