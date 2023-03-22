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
        Schema::create('repair_request_maintenance', function (Blueprint $table) {
         
            $table->id();
            $table->integer('item_number');
            $table->date('date_repair');
            $table->string('description');
            $table->float('amount');
            $table->string('in_house');
            $table->string('outsource');
            $table->string('remarks/status');
            $table->foriegn('repair_request_maintenance_id');
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
