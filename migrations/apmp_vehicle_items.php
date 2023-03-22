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
            $table->foreign('apmp_detail_id');
            $table->string('type');
            $table->string('make');
            $table->string('plate_number');
            $table->integer('odometer_reading');
            $table->date('date_taken');
            $table->string('service_unit');
            $table->string('task');
            $table->string('forms');
            $table->string('status/remarks');
            $table->date('jan_to_jun');
            $table->date('jul_to_dec');
            $table->integer('odometer');
            $table->date('activitiy_date');
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
