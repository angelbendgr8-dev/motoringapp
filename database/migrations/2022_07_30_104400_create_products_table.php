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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('maker');
            $table->string('model');
            $table->string('caryear');
            $table->string('mileage');
            $table->string('fuelType');
            $table->string('bodyType');
            $table->string('gearType');
            $table->string('sellingCondition');
            $table->string('price');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->string('area');
            $table->string('state');
            $table->json('images');
            $table->timestamp('date')->nullable();
            $table->string('type');
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('car_sales');
    }
};
