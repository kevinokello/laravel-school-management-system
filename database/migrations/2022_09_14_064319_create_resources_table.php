<?php

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('body')->nullable();
            $table->integer('price')->default(0);
            $table->tinyInteger('status')->default('0')->nullable();
            $table->tinyInteger('featured')->default('0')->nullable();
            $table->tinyInteger('recommended')->default('0')->nullable();
            $table->foreignIdFor(Category::class, 'category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(SubCategory::class, 'sub_category_id')->constrained('sub_categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('slug')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('yt_iframe')->nullable();
            $table->string('attatchment')->nullable();
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
        Schema::dropIfExists('resources');
    }
};
