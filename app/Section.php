<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "section";
    public $timestamps = false;
    protected $fillable = [
        'section', 'programme', 'year_level'];
}
