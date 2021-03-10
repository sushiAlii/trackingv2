<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('ppmp_id');
            $table->integer('quantity');
            $table->double('total',8,2)->nullable();
        });

        Schema::table('order_details', function (Blueprint $table){
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('order_details');
    }
}
