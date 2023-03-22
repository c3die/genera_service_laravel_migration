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
         Schema::create('equipment_request_items', function (Blueprint $table) {
            $table->id();
            $table->string('item');  
            $table->string('model');
            $table->string('serial_number');
            $table->string('property_number');
            $table->integer('quantity');
            $table->foreign('item')->references('id')->on('');
            $table->softDeletes();
            $table->timestamps();
            //done
            // equipment_request_detail - equipment_request_items (rename table name)
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
