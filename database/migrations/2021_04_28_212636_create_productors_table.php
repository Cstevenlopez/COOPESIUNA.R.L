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
            $table->foreignId('finca_id')->constrained('fincas');
            $table->string('id_productor')->Unique();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('numero_cedula',20);
            $table->string('numero_telefono',50);
            $table->string('foto');
            $table->string('comunidad',50);
            $table->string('municipio',50);
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
