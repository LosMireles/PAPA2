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
            $table->increments('IdSanitario');
			$table->string('Tipo', 25);
			$table->string('InicioHora', 10);
			$table->string('FinHora', 10);
			$table->string('InicioDia', 10);
			$table->string('FinDia', 10);
			$table->integer('Limpieza');
			$table->integer('CantidadPersonal');
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
        Schema::dropIfExists('sanitarios');
    }
}
