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
        Schema::create('repair_request_signatories', function (Blueprint $table) {
         
            $table->id();
            $table->foreign('repair_request_id')->references('id')->on('repair_requests');
            $table->foreign('prepared_by')->references('id')->on('user');
            $table->foreign('supervised_by')->references('id')->on('user');
            $table->foreign('recommending_approval')->references('id')->on('user');
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
