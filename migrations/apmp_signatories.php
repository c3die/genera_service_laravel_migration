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
            $table->foreign('prepared_by')->references('id')->on('user');
            $table->foreign('recommending_approval')->references('id')->on('user');
            $table->foreign('approved_by')->references('id')->on('user');
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
