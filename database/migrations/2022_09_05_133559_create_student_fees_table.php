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
        Schema::create('student_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('academic_id')->nullable();
            $table->integer('cohort_id')->nullable();
            $table->integer('fee_category_id')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('date')->nullable();
            $table->double('amount')->nullable()->default('0');
            $table->string('school_id')->default('0');
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
        Schema::dropIfExists('student_fees');
    }
};
