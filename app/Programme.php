<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table = "programme";
    public $timestamps = false;
    protected $fillable = [
       'programme_acronym', 'programme_description', 'department'];
}
