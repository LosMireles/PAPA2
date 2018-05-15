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
            $table -> increments('id')          -> unique()  -> unsigned();
            $table -> char('nombre', 45)        -> unique();
            $table -> string('periodo');
            $table -> integer('grupo');
            $table -> integer('noEstudiantes');
            $table -> string('tipoAula');
            $table -> string('tipo');

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
