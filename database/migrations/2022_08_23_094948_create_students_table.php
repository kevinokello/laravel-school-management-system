<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academic_id')->nullable()->unsigned();
            $table->integer('cohort_id')->nullable()->unsigned();
            $table->integer('session_id')->nullable()->unsigned();
            $table->string('first_name', 200)->nullable();
            $table->string('middle_name', 200)->nullable();
            $table->string('last_name', 200)->nullable();
            $table->string('religion_id')->nullable();
            $table->string('gender_id')->nullable();
            $table->string('location_id')->nullable();
            $table->string('email', 200)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('mobile', 200)->nullable();
            $table->date('admission_date')->nullable();
            $table->string('student_photo')->nullable();
            $table->integer('admission_no')->nullable();
            $table->string('document_file', 200)->nullable();
            $table->string('previous_school_details', 500)->nullable();
            $table->string('aditional_notes', 500)->nullable();
            $table->string('medical_condition', 500)->nullable();
            $table->integer('fee_id')->default('0');
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
        Schema::dropIfExists('students');
    }
};
