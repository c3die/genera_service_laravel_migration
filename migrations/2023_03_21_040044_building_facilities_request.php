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
            // rename fields
            //     time_of_activity - activity_time
            //     number_of_participant_pdea - pdea_participants
            //     number_of_participant_other - other_participants
            //     service_office - services
            //     equipment_matertial_needed - matertial_needed
            //     non_pdea_equipment - non_pdea_material
            // add soft deletes ($table->softDeletes())
            // add status field
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
