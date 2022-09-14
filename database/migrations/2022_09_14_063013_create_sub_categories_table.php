<?php

use App\Models\Category;
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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Category::class)->constrained()->nullOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Category::class, 'category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            // $table->unsignedBigInteger('category_id')->nullable()->default(null);
            // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->integer('order')->default(1);
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('status', ['enabled', 'disabled'])->default('enabled');
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
        Schema::dropIfExists('sub_categories');
    }
};
