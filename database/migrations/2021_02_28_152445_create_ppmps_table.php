<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppmps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('account_code');
            $table->double('total',8,2)->nullable();
            $table->string('type');
            $table->integer('status');
            $table->string('mode_of_procurement');
            $table->string('cur_location')->nullable();
            $table->unsignedBigInteger('source_of_fund_id');
            $table->timestamps();
        });

        Schema::table('ppmps', function (Blueprint $table) {
            $table->foreign('source_of_fund_id')->references('id')->on('source_of_funds');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppmps');
    }
}
