<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('time_open');
            $table->string('time_close');
            $table->string('document')->unique();//nuemro de documento
            $table->date('opening');
            $table->enum('status',['Operando','Mantenimiento','Clausurada'])->default('Operando');
            $table->foreignId('id_company');
            $table->timestamps();
            $table->foreign('id_company')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
