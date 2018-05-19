<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id')->unique()->unsigned();
			$table->string('Tipo', 25);
			$table->integer('CantidadEquipo');
			$table->integer('CantidadAV');
			$table->integer('Capacidad');
			$table->boolean('SillasPaleta');
			$table->boolean('MesasTrabajo');
			$table->boolean('Isotopica');
			$table->boolean('Estrado');
			$table->integer('Pizarron');
			$table->integer('Illuminacion');
			$table->integer('AislamientoR');
			$table->integer('Ventilacion');
			$table->integer('Temperatura');
			$table->integer('Espacio');
			$table->integer('Mobilario');
			$table->integer('Conexiones');
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
        Schema::dropIfExists('aulas');
    }
}
