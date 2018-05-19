<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditorios', function (Blueprint $table) {
            $table->increments('id')->unique()->unsigned();
			$table->string('Tipo', 25);
			$table->integer('CantidadEquipo');
			$table->integer('CantidadAV');
			$table->integer('Capacidad');
			$table->integer('CantidadSanitarios');

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
        Schema::dropIfExists('auditorios');
    }
}
