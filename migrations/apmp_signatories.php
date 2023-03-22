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
            $table->foreign('prepared_by');
            $table->foreign('recommending_approval');
            $table->foreign('approved_by');       
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
