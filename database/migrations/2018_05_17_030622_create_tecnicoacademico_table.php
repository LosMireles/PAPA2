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
            $table -> increments('id')->unique();
            $table -> string('nombre');
            $table -> time('hora_inicio');
            $table -> time('hora_termino');
            $table -> string('dia_inicio');
            $table -> string('dia_termino');
            $table -> string('localizacion');
            $table -> string('curriculum');
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
