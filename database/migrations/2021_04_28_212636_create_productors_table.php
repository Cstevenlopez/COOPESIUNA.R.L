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
            $table->string('id_productor')->unique();

            $table->string('fincaid');
            $table->foreign('fincaid')->references('finca_id')->on('uso_de_tierras');

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('foto')->nullable();
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
