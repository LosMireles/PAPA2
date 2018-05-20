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
            $table -> increments('id')             -> unique()  -> unsigned();
			$table -> string('Tipo')               -> unique();
			$table -> integer('CantidadEquipo');
			$table -> integer('CantidadAV');
			$table -> integer('Capacidad');

			$table -> boolean('SillasPaleta');
			$table -> boolean('MesasTrabajo');
			$table -> boolean('Isotopica');
			$table -> boolean('Estrado');

			$table -> tinyInteger('Pizarron');
			$table -> tinyInteger('Illuminacion');
			$table -> tinyInteger('AislamientoR');
			$table -> tinyInteger('Ventilacion');
			$table -> tinyInteger('Temperatura');
			$table -> tinyInteger('Espacio');
			$table -> tinyInteger('Mobilario');
			$table -> tinyInteger('Conexiones');

            $table -> timestamps();
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
