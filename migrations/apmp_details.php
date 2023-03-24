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
                $table->id();
                $table->string('transaction_number');
                $table->date('year');
                $table->string('type');  
                $table->string('status');  
                $table->softDelete(); 
                $table->timestamps();
               
               
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
