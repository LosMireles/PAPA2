<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table -> increments('id')          -> unique()    -> unsigned();
            $table -> string('nombre')          -> nullable();
            $table -> string('periodo')         -> nullable();
            $table -> string('departamento')    -> nullable();
            $table -> integer('no_grupo')       -> nullable();
            $table -> integer('no_estudiantes') -> nullable();

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
        Schema::dropIfExists('cursos');
    }
}

