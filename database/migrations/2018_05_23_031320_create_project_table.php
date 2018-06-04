<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('nombre_proyecto');
            $table->string('imagen')->nullable();
            $table->string('tecnologia_proyecto');
            $table->string('capacidad');
            $table->string('fecha_estimada');
            $table->string('gcr');
            $table->string('tipo_estudio');
            $table->string('mpio/estado');
            $table->string('empresa');
            $table->string('coordenadas');
            $table->longText('descripcion');
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
        Schema::dropIfExists('projects');
    }
}
