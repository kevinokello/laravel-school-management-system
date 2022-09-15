<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @return void
     */





    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id();
            $table->string('cohort_name');
            $table->string('academic_id');
            $table->tinyInteger('status')->default('0');
            $table->integer('created_by')->default('0');
            $table->integer('fee_id');
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
        Schema::dropIfExists('cohorts');
    }
};
