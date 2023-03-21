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
        Schema::create('building_facilities_equipment_maintanance_plan', function (Blueprint $table) {
         
            $table->id('transaction_number');
            $table->string('prepared_by');
            $table->string('recommending_approval');
            $table->string('approved_by');
            $table->string('type');  
            $table->string('make');
            $table->string('plate_number');
            $table->string('odometer_reading');
            $table->date('date_taken');
            $table->string('service_unit');
            $table->string('annual_activities');
            $table->date('jan_to_jun');
            $table->date('jul_to_dec');
            $table->string('odometer');
            $table->string('date'); 
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
