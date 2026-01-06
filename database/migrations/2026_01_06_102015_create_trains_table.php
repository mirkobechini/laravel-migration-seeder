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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 100)->nullable();
            $table->string("start_station", 100)->nullable();
            $table->string("arrive_station", 100)->nullable();
            $table->dateTime("start_dateTime")->nullable();
            $table->dateTime("arrive_dateTime")->nullable();
            $table->string("train_code",50)->unique();
            $table->integer("carriages_number")->default(1);
            $table->boolean("onTime")->default(true);
            $table->boolean("deleted")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
