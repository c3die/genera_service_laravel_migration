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
        Schema::create('repair_request_maintenance_items', function (Blueprint $table) {
         
            $table->id();
            $table->foriegn('repair_request_maintenance_id')->references('id')->on('repair_request_maintenance');
            $table->integer('item_number');
            $table->date('date_repair');
            $table->string('description');
            $table->float('amount');
            $table->string('in_house');
            $table->string('outsource');
            $table->string('remarks');
           
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
