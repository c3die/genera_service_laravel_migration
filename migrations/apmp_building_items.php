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
            $table->foreign('apmp_detail_id');
            $table->string('facility');
            $table->string('location');
            $table->date('annual_activities');
            $table->date('semi_annual_activities');
            $table->string('task');
            $table->string('service_unit');
            $table->string('task');
            $table->string('forms');
            $table->string('status');
           
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
