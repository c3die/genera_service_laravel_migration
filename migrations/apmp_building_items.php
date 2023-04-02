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
        Schema::create('apmp_building_items', function (Blueprint $table) {
         
            $table->id();
            $table->foreign('apmp_details_id')->references('id')->on('apmp_details');
            $table->string('facilities');
            $table->string('location');
            $table->date('annual_activities');
            $table->date('semi_annual_activities');
            $table->string('task');
            $table->string('service_units');
            $table->string('forms');
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
