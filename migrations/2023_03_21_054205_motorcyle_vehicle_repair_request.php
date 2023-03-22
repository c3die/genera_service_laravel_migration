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
        Schema::create('motorcyle_vehicle_repair_request', function (Blueprint $table) {
            $table->id();
            $table->string('requested_party');  
            $table->date('date_requested');
            $table->time('time_requested');
            $table->string('vehicle');
            $table->string('color');
            $table->string('plate_number');
            $table->string('prepared_by');
            $table->string('supervised_by');
            $table->string('recommending_approval');
            
            $table->timestamps();


            // remove building_facilities_equipment_repair_request
            // rename motorcyle_vehicle_repair_request - repair_requests
            // add new field (type)
            // add soft deletes ($table->softDeletes())
            // add status field
            // retain fields
            //     requesting_party
            //     date_requested
            //     time_requested
            //     status
            //     nullable fields
            //         vehicle
            //         color
            //         plate_number
            //         service_office - services
            //         request_repair_for - repair_for





            // create new table repair_request_signatories
            //     fields
            //         repair_request_id - foreign id
            //         prepared_by - foreign id
            //         supervised_by - foreign id
            //         recommending_approval - foreign id





            // create new table repair_request_maintenance
            //     fields
            //       property - string
            //       property_number - string
            //       description - string
            //       chassis_number - string
            //       serial_number - string
            //       plate_number - string
            //       engine_number - string
            //       status - string
            //       repair_request_id - foreign id




            // create new table repair_request_maintenance_items
            //     fields
            //       item_number - integer
            //       date_repair - date
            //       description - string
            //       amount - float
            //       in_house - string
            //       outsource - string
            //       remarks/status - string
            //       repair_request_maintenance_id - foreign id

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
