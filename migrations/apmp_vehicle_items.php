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
        Schema::create('apmp_vehicle_items', function (Blueprint $table) {
         
            $table->id();
            $table->foreign('apmp_details_id')->references('id')->on('apmp_details');
            $table->string('types');
            $table->string('makes');
            $table->string('plate_number');
            $table->integer('odometer_readings');
            $table->date('date_taken');
            $table->string('service_units');
            $table->string('tasks');
            $table->string('forms');
            $table->string('status');
            $table->date('jan_to_jun');
            $table->date('jul_to_dec');
            $table->integer('odometers');
            $table->date('activities_date');
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
