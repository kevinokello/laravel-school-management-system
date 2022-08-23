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
            $table->integer('admission_no')->nullable();
            $table->string('first_name', 200)->nullable();
            $table->string('second_name', 200)->nullable();
            $table->string('last_name', 200)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('email', 200)->nullable();
            $table->string('mobile', 200)->nullable();
            $table->date('admission_date')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('current_address', 500)->nullable();
            $table->string('previous_school_details', 500)->nullable();
            $table->string('aditional_notes', 500)->nullable();
            $table->string('document_title_1', 200)->nullable();
            $table->string('document_file_1', 200)->nullable();
            $table->string('document_title_2', 200)->nullable();
            $table->tinyInteger('active_status')->default(1);
            $table->text('custom_field')->nullable();

            $table->integer('religion_id')->nullable()->unsigned();
            $table->foreign('religion_id')->references('id')->on('base_setups')->onDelete('set null');

            $table->integer('dormitory_id')->nullable()->unsigned();
            $table->foreign('dormitory_id')->references('id')->on('dormitory_lists')->onDelete('set null');

            $table->integer('student_group_id')->nullable()->unsigned();
            $table->foreign('student_group_id')->references('id')->on('student_groups')->onDelete('set null');

            $table->integer('class_id')->nullable()->unsigned();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null');

            $table->integer('session_id')->nullable()->unsigned();
            $table->foreign('session_id')->references('id')->on('academic_years')->onDelete('set null');

            $table->integer('parent_id')->nullable()->nullable()->unsigned();
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');

            $table->integer('teacher_id')->nullable()->nullable()->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

            $table->integer('user_id')->nullable()->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('gender_id')->nullable()->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender')->onDelete('set null');

            $table->integer('school_id')->default(1)->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');

            $table->integer('academic_id')->nullable()->unsigned();
            $table->foreign('academic_id')->references('id')->on('academic_years')->onDelete('cascade');

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
