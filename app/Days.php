<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    protected $table = "days";

    protected $fillable = [
        'setcourse_id', 'days'];
}
