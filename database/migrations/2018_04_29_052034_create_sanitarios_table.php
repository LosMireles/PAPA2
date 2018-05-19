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
            $table->increments('id')->unique()->unsigned();
			$table->string('Tipo', 25);
			$table->time('InicioHora', 10);
			$table->time('FinHora', 10);
			$table->date('InicioDia', 10);
			$table->date('FinDia', 10);
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
