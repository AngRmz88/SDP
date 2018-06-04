<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id'); //identificador
            $table->string('name'); //nombre
            $table->string('email')->unique(); //correo
            $table->string('password'); //contraseña
            $table->enum('type',['admin','user']); //tipo de usuario
            $table->rememberToken(); //restauracion de contraseña
            $table->timestamps(); //crea columnas de crearcion y modificacion 
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
