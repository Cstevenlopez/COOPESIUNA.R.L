<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productors', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('finca_id');
            $table->foreign('finca_id')->references('id')->on('fincas')->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('numero_cedula');
            $table->string('numero_telefono');
            $table->string('comunidad');
            $table->string('municipio');
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
        Schema::dropIfExists('productors');
    }
}
