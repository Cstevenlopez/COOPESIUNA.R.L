<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFincasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fincas', function (Blueprint $table) {
            $table->id();
            $table->string('id_finca')->unique();
            $table->string('nombre',50);
            $table->string('legalidad',50);
            $table->string('comunidad',50);
            $table->string('municipio',50);
            $table->string('departamento',50);
            $table->string('pais',50);
            $table->string('disponibilidad_energia',50);
            $table->string('disponibilidad_agua',50);
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
        Schema::dropIfExists('fincas');
    }
}
