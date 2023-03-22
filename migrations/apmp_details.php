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
        Schema::create('apmp_details', function (Blueprint $table) {
         
                $table->id('transaction_number');
                $table->date('year');
                $table->string('type');  
                $table->string('status');  
                $table->softDelete(); 
                $table->timestamps();
                //done
                // remove building_facilities_equipment_maintanance_plan
                // rename vehicle_motorcyle_maintanance_plan to apmp_details
                // add new field (type)
                // add status field
                // add soft deletes
                // retain fields
                //      transaction_number
                //      year

                // create new table - apmp_vehicle_items
                //  fields
                //      apmp_detail_id - foreign id
                //      type - string
                //      make - string
                //      plate_number - string
                //      odometer_reading - integer
                //      date_taken - date
                //      service_unit - string
                //      task - string
                //      forms - string
                //      status/remarks - string
                //      jan_to_jun - date
                //      jul_to_dec - date
                //      odometer - integer
                //      activitiy_date - date

                // create new table - apmp_building_items
                //  fields
                //      apmp_detail_id - foreign id
                //      facility - string
                //      location - string
                //      annual_activities - date
                //      semi_annual_activities - date
                //      task - string
                //      forms - string
                //      status - string

                // create new table - apmp_signatories
                //  fields
                //      apmp_detail_id - foreign id
                //      prepared_by - foreign id
                //      recommending_approval - foreign id
                //      approved_by - foreign id
             });
    }

    /**
     * Reverse the migrations.
     * 
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
