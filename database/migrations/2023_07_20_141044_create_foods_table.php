<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('food_id');
            $table->unsignedInteger('food_category_id');
            $table->string('food_brand', 30);
            $table->string('food_name', 50);
            $table->string('food_image_path')->nullable();
            $table->timestamps();
            // 外部キー制約
            $table->foreign('food_category_id')->references('food_category_id')->on('food_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
