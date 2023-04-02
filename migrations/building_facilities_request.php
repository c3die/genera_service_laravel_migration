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
            $table->string('requesting_parties');  
            $table->date('date_requested');
            $table->time('time_requested');
            $table->string('requested_facilities');
            $table->date('date_from');
            $table->date('date_to');
            $table->time('activities_time');
            $table->integer('pdea_participants');
            $table->string('services');
            $table->string('matertials_needed');
            $table->integer('other_participants');
            $table->string('non_pdea_materials');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();

            //done
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
