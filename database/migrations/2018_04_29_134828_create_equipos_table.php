<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table -> increments('id')                -> unique()    -> unsigned();
            $table -> string('serial')                -> unique();
            $table -> string('sistema_operativo')     -> nullable();
            $table -> string('tipo')                  -> nullable();
            //conjunto de caracteristicas hardware
            $table -> string('marca')                 -> nullable();
            $table -> string('cpu')                   -> nullable();
            $table -> string('almacenamiento')        -> nullable();
            $table -> string('ram')                   -> nullable();
            $table -> longText('otras_caracteristicas') -> nullable();

            $table->integer('aula_id')->unsigned()->nullable();
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');

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
        Schema::dropIfExists('equipos');
    }
}
