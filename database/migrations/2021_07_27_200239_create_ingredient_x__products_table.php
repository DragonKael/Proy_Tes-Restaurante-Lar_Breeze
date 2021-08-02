<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientXProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_x__products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ingredient');
            $table->foreignId('id_product');
            $table->integer('quantity');
            $table->string('measure')->nullable(); //u de medida
            $table->string('note')->nullable();
            $table->timestamps();
            $table->foreign('id_ingredient')->references('id')->on('ingredients');
            $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_x__products');
    }
}
