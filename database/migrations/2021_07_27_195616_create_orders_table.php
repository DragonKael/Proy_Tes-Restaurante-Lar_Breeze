<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_table');
            $table->enum('status',['Atendido','Completada','Cancelado','En_proceso','En_reserva'])->default('Atendido');
            $table->enum('modality',['Local','Empaquetado','Delivery'])->default('Local');
            $table->foreignId('id_client');
            $table->foreignId('id_user');
            $table->timestamps();
            $table->foreign('id_table')->references('id')->on('tables');
            $table->foreign('id_client')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
