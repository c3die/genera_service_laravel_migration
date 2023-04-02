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
        Schema::create('driver_vehicle_requests', function (Blueprint $table) {
            $table->id();
            $table->string('control_numbers');
            $table->boolen('is_drivers');
            $table->boolen('is_vehicles');
            $table->boolen('is_both');
            $table->string('requesting_name');  
            $table->string('contact_number');
            $table->date('date_requested');
            $table->string('purposes');
            $table->string('destinations');
            $table->boolen('is_rosa_bus');
            $table->boolen('is_canter');
            $table->boolen('is_vios');
            $table->boolen('is_hi_ace');
            $table->boolen('is_h_100');
            $table->integer('number_of_passengers');
            $table->date('travel_date');
            $table->time('travel_time');
            $table->string('service_director');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();





            //done
            // driver_vehicle_requests (shorten table name)
            //     separate fields control_number to id
            //     shorten column names (name_of_requesting_party - requesting_name / date_of_travel - travel_date)
            //     add status field
            //     add soft deletes ($table->softDeletes())
            //     remove request and vehicle_requested field
            //     add new fields
            //         is_driver - boolean
            //         is_vehicle - boolean
            //         is_both - boolean
            //         is_rosa_bus - boolean
            //         is_canter - boolean
            //         is_vios - boolean
            //         is_hi_ace - boolean
            //         is_h_100 - boolean
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
