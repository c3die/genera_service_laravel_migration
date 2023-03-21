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
        Schema::create('building_facilities_request', function (Blueprint $table) {
            $table->id();
            $table->string('requesting_party');  
            $table->date('date_requested');
            $table->time('time_requested');
            $table->string('requested_facility');
            $table->date('date_from');
            $table->date('date_to');
            $table->time('time_of_activity');
            $table->integer('number_of_participant_pdea');
            $table->string('service_office');
            $table->string('equipment_matertial_needed');
            $table->integer('number_of_participant_other');
            $table->string('non_pdea_equipment');
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
