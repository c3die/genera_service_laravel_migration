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
        Schema::create('equipment_request_details', function (Blueprint $table) {
            $table->id();
            $table->string('requesting_party');  
            $table->date('date_requested');
            $table->time('time_requested');
            $table->string('services');
            $table->string('landline_number');
            $table->string('mobile_number');
            $table->string('purpose');
            $table->date('activity_date');
            $table->time('activity_time');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
            //done
            // equipment_request - equipment_request_details (rename table name)
                // rename fields
                //     service_office - services
                //     date_of_activity - activity_date
                //     time_of_activity - activity_time
                // remove approving_authority field
                // add soft deletes ($table->softDeletes())
                // add status field



            // ADD NEW TABLE FOR SIGNATORIES
            // equipment_request_signatories
            //     name
            //     add foreign key
            //     add soft deletes ($table->softDeletes())
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
