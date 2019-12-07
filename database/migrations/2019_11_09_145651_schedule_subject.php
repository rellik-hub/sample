<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScheduleSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Schedule_subject', function (Blueprint $table) {
            $table->string('edb_code');
            $table->string('course_code');
            $table->string('course_description');
            $table->string('days');
            $table->string('class_type');
            $table->string('from_time');
            $table->string('to_time');
            $table->string('room');
            $table->string('faculty_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Schedule_subject');
    }
}
