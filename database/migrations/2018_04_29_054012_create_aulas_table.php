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
            $table -> increments('id')                 -> unique()    -> unsigned();
			$table -> string('nombre')                 -> unique();
            $table -> float('superficie')              -> nullable();
			$table -> integer('capacidad')             -> nullable();

			$table -> boolean('sillas_paleta')         -> nullable();
			$table -> boolean('mesas_trabajo')         -> nullable();
			$table -> boolean('isotopica')             -> nullable();
			$table -> boolean('estrado')               -> nullable();

			$table -> tinyInteger('pizarron')          -> nullable();
			$table -> tinyInteger('iluminacion')       -> nullable();
			$table -> tinyInteger('aislamiento_ruido') -> nullable();
			$table -> tinyInteger('ventilacion')       -> nullable();
			$table -> tinyInteger('temperatura')       -> nullable();
			$table -> tinyInteger('espacio')           -> nullable();
			$table -> tinyInteger('mobilario')         -> nullable();
			$table -> tinyInteger('conexiones')        -> nullable();

			$table -> boolean('asesoria')              -> nullable();

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
