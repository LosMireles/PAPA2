<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActividadCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_curso', function (Blueprint $table) {
            $table -> integer('actividad_id')                -> unsigned()       -> index();
            $table -> foreign('actividad_id')                -> references('id') -> on('actividades') -> onDelete('cascade');
            $table -> integer('curso_id')                    -> unsigned()       -> index();
            $table -> foreign('curso_id')                    -> references('id') -> on('cursos')      -> onDelete('cascade');
            $table -> primary(['actividad_id', 'curso_id']);

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
        Schema::dropIfExists('actividad_curso');
    }
}

