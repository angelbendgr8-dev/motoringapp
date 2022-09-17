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
        Schema::create('car_discriptions', function (Blueprint $table) {
            $table->id();
            $table->string('engine');
            $table->string('interior_color');
            $table->string('exterior_color');
            $table->string('vin');
            $table->string('car_id');
            $table->string('transmission');
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
        Schema::dropIfExists('car_discriptions');
    }
};
