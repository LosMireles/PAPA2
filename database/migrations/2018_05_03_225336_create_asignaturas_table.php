<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table -> increments('id')         -> unique()         -> unsigned();
            $table -> char('nombre', 50)       -> unique();
            $table -> longText('descripcion');

            $table -> integer('curso_id')      -> unsigned();
            $table -> foreign('curso_id')      -> references('id') -> on('cursos') -> onDelete('cascade');

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
        Schema::dropIfExists('asignaturas');
    }
}

