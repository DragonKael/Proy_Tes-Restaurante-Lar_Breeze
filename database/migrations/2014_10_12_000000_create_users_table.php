<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('phone');
            $table->enum('gender',['N/A','masculino','femenino'])->default('N/A');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('document_type',['N/A','DNI','Pasaporte'])->default('N/A');
            $table->string('document')->unique()->nullable();
            $table->enum('class',['cocinero','mozo','administrador','superadmin'])->default('mozo');
            $table->enum('status',['contratado','despedido','renuncia'])->default('contratado');
            $table->text('profile_photo_url')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
