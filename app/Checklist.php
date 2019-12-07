<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = "checklist";

    protected $fillable = [
        'programme', 'year_level', 'semester', 'curriculum', 'year'];
}
