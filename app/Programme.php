<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table = "programme";

    protected $fillable = [
       'programme_acronym', 'programme_description', 'department'];
}
