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
        Schema::create('meal_history_details', function (Blueprint $table) {
            $table->increments('meal_history_detail_id');
            $table->unsignedInteger('meal_history_id');
            $table->unsignedInteger('food_id');
            $table->unsignedInteger('amount_of_food');
            $table->timestamps();
            // 外部キー制約
            $table->foreign('meal_history_id')->references('meal_history_id')->on('meal_histories')->onDelete('cascade');
            $table->foreign('food_id')->references('food_id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_history_details');
    }
};
