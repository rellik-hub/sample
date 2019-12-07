<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonalDataSheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PersonalDataSheet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cs_id');
            $table->string('surname');
            $table->string('first_name');
            $table->string('month');
            $table->string('day');
            $table->string('year');
            $table->string('middlename');
            $table->string('name_extension');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('height');
            $table->string('weight');
            $table->string('bloodtype');
            $table->string('gsis_id_no');
            $table->string('pag_ibig_id_no');
            $table->string('philhealth_no');
            $table->string('sss_no');
            $table->string('residential_address');
            $table->integer('residential_zip_code');
            $table->string('residential_telephone_no');
            $table->string('permanent_address');
            $table->integer('permanent_zip_code');
            $table->string('permanent_telephone_no');
            $table->string('e_mail_address');
            $table->string('cellphone_no');
            $table->string('agency_employee_no');
            $table->string('tin');
            $table->string('department');
            $table->string('colleges');
            $table->string('specialization');
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
        Schema::dropIfExists('PersonalDataSheet');
    }
}
