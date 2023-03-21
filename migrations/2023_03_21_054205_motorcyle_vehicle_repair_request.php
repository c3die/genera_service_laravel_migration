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
