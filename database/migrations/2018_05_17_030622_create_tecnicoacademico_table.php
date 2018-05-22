<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicoacademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicoacademico', function (Blueprint $table) {
            $table -> increments('id')        -> unique()    -> unsigned();
            $table -> string('nombre')        -> unique();
            $table -> time('hora_inicio');
            $table -> time('hora_termino');
            $table -> date('dia_inicio');
            $table -> date('dia_termino');
            $table -> string('localizacion');
            $table -> string('curriculum')    -> nullable();

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
        Schema::dropIfExists('tecnicoacademico');
    }
}
