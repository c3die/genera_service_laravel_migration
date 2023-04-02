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
        Schema::create('repair_request_maintenances', function (Blueprint $table) {
         
            $table->id();
            $table->foriegn('repair_request_id')->references('id')->on('repair_request_maintenance_items');
            $table->integer('properties');
            $table->date('properties_number');
            $table->string('chassis_number');
            $table->float('serial_number');
            $table->string('plate_number');
            $table->string('engine_number');
            $table->string('status');
            
            $table->softDeletes();
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
