<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "room";
    public $timestamps = false;
    protected $fillable = [
        'room_no', 'room_capacity', 'room_classification'];
}
