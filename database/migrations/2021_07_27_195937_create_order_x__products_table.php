<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderXProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_x__products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_product');
            $table->foreignId('id_order');
            $table->string('details')->nullable();
            $table->timestamps();
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_order')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_x__products');
    }
}
