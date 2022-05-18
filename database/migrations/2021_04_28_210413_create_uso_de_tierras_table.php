<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsoDeTierrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uso_de_tierras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('finca_id');
            $table->foreign('finca_id')->references('id')->on('fincas')->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('area_total',50);
            $table->string('boque_primario',50);
            $table->string('bosque_secundario',50);
            $table->string('cultivos_anuales',50);
            $table->string('plantaciones_forestales',50);
            $table->string('areas_pasto_abierto',50);
            $table->string('areas_pasto_arboles',50);
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
        Schema::dropIfExists('uso_de_tierras');
    }
}
