<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code');
            $table->string('course_desription');
            $table->integer('lecture');
            $table->integer('laboratory');
            $table->string('course_unit');
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
        Schema::dropIfExists('Courses');
    }
}
