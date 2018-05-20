<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanitariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanitarios', function (Blueprint $table) {
            $table -> increments('id')                 -> unique()  -> unsigned();
			$table -> string('Tipo')                   -> unique();
			$table -> time('InicioHora');
			$table -> time('FinHora');
			$table -> date('InicioDia');
			$table -> date('FinDia');
			$table -> tinyInteger('Limpieza');
			$table -> tinyInteger('CantidadPersonal');

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
        Schema::dropIfExists('sanitarios');
    }
}

