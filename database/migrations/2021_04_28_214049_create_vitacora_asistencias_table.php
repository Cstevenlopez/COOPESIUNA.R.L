<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitacoraAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitacora_asistencias', function (Blueprint $table) {
            $table->id();
            $table->string('actividad');
            $table->string('objetivo');
            $table->string('temas_abordados');
            $table->string('dificultades');
            $table->string('soluciones');
            $table->string('recomendaciones');
            $table->string('fecha');
            $table->date('siguiente_visita');

            $table->unsignedBigInteger('productorid');
            $table->foreign('productorid')->references('id')->on('productors')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('vitacora_asistencias');
    }
}
