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
        Schema::create('car_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->json('engines')->nullable();
            $table->json('electricals')->nullable();
            $table->json('transmission_and_clutch')->nullable();
            $table->json('suspension_and_steering')->nullable();
            $table->json('test_drive')->nullable();
            $table->json('exterior')->nullable();
            $table->json('interior')->nullable();
            $table->json('air_conditioning')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('car_inspections');
    }
};