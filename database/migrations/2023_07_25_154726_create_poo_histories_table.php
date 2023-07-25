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
        Schema::create('poo_histories', function (Blueprint $table) {
            $table->increments('poo_history_id');
            $table->date('poo_date');
            $table->time('poo_time');
            $table->string('memo')->nullable();
            $table->unsignedInteger('poo_status_id');
            $table->timestamps();
            // 外部キー制約
            $table->foreign('poo_status_id')->references('poo_status_id')->on('poo_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poo_histories');
    }
};
