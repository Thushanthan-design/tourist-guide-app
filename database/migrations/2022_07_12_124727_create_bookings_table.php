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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('tourist_id');
            $table->foreign('tourist_id')->references('id')->on('tourists');

            $table->string('tourist_name');
            $table->string('country');
            $table->string('email');
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('agent_id');
            // $table->foreign('agent_id')->references('id')->on('users');

            $table->string('checkin');
            $table->string('checkout');
            $table->string('comfort');
            $table->string('adults');
            $table->string('childrens');
            $table->string('rooms');
            $table->text('message')->nullable();
            $table->string('price')->nullable();
            $table->string('action')->default('pending');
            
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
        Schema::dropIfExists('bookings');
    }
};
