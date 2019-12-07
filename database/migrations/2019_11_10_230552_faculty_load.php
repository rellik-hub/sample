<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacultyLoad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FacultyLoad', function (Blueprint $table) {
            $table->bigIncrements('id');
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
        Schema::dropIfExists('FacultyLoad');
    }
}
