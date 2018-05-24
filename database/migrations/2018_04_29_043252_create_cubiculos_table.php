<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCubiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cubiculos', function (Blueprint $table) {
            $table -> increments('id')          -> unique()    -> unsigned();
			$table -> string('Tipo')            -> unique();
            $table -> float('superficie')       -> nullable();
			$table -> string('Profesor')        -> nullable();
			$table -> integer('CantidadEquipo') -> nullable();


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
        Schema::dropIfExists('cubiculos');
    }
}

