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

            $table->string('id_vitacora')->unique();

            $table->string('actividad');
            $table->string('objetivo');
            $table->string('temas_abordados');
            $table->string('dificultades');
            $table->string('soluciones');
            $table->string('recomendaciones');
            $table->date('fecha');
            $table->date('siguiente_visita');

            $table->string('productorid');
            $table->foreign('productorid')->references('id_productor')->on('productors');

            $table->string('usuario_id');
            $table->foreign('usuario_id')->references('id_usuario')->on('users');    
            
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
