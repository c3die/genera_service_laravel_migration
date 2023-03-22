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
            $table->foreign('repair_request_id');
            $table->foreign('prepared_by');
            $table->foreign('supervised_by');
            $table->foreign('recommending_approval');
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
