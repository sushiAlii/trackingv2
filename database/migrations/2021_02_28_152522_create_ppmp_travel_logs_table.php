<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpmpTravelLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppmp_travel_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ppmp_id')->nullable();
            $table->timestamp('date_arrived')->nullable();
            $table->string('office')->nullable();
        });

        Schema::table('ppmp_travel_logs', function (Blueprint $table) {
            $table->foreign('ppmp_id')->references('id')->on('ppmps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppmp_travel_logs');
    }
}
