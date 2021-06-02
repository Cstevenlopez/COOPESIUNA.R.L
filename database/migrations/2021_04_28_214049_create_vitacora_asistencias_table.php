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
            $table->foreignId('productor_id')->constrained('productors');
            $table->string('actividad',50);
            $table->string('objetivo',50);
            $table->string('temas_abordados',100);
            $table->string('dificultades',100);
            $table->string('soluciones',100);
            $table->string('recomendaciones',100);
            $table->date('fecha');
            $table->date('siguiente_visita');
            $table->foreignId('usuario_id')->constrained('users');           
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
