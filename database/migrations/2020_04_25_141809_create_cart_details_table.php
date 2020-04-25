<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('quantity')->unsigned()->default(0);
            $table->integer('discount')->unsigned()->default(0);//% int

            // FK
             $table->integer('cart_id')->unsigned();
             $table->foreign('cart_id')->references('id')->on('carts');

             $table->integer('product_id')->unsigned();
             $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('cart_details');
    }
}
