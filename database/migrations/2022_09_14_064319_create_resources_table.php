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
            $table->longText('description');
            $table->longText('body')->nullable();
            $table->integer('price')->default(0);
            $table->foreignIdFor(Category::class, 'category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(SubCategory::class, 'sub_category_id')->constrained('sub_categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['enabled', 'disabled'])->default('enabled');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
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
