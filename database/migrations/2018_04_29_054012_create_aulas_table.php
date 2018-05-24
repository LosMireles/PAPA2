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
            $table -> increments('id')            -> unique()    -> unsigned();
			$table -> string('Tipo')              -> unique();
            $table -> float('superficie')         -> nullable();
			$table -> integer('CantidadEquipo')   -> nullable();
			$table -> integer('CantidadAV')       -> nullable();
			$table -> integer('Capacidad')        -> nullable();

			$table -> boolean('SillasPaleta')     -> nullable();
			$table -> boolean('MesasTrabajo')     -> nullable();
			$table -> boolean('Isotopica')        -> nullable();
			$table -> boolean('Estrado')          -> nullable();

			$table -> tinyInteger('Pizarron')     -> nullable();
			$table -> tinyInteger('Illuminacion') -> nullable();
			$table -> tinyInteger('AislamientoR') -> nullable();
			$table -> tinyInteger('Ventilacion')  -> nullable();
			$table -> tinyInteger('Temperatura')  -> nullable();
			$table -> tinyInteger('Espacio')      -> nullable();
			$table -> tinyInteger('Mobilario')    -> nullable();
			$table -> tinyInteger('Conexiones')   -> nullable();

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
