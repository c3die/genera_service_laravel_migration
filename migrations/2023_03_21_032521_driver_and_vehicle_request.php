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
        //
        Schema::create('driver_and_vehicle_request', function (Blueprint $table) {
            $table->id('control_number');
            $table->string('request');
            $table->string('name_of_requesting_party');  
            $table->string('contact_number');
            $table->date('date_requested');
            $table->string('purpose');
            $table->string('destination');
            $table->string('vehicle_requested');
            $table->integer('number_of_passenger');
            $table->date('date_of_travel');
            $table->time('time_of_travel');
            $table->string('service_director');
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
        //
    }
};
