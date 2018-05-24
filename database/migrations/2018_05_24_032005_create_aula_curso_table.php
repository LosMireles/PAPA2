<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulaCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_curso', function (Blueprint $table) {
            $table -> integer('aula_id')                -> unsigned()       -> index();
            $table -> foreign('aula_id')                -> references('id') -> on('aulas')  -> onDelete('cascade');
            $table -> integer('curso_id')               -> unsigned()       -> index();
            $table -> foreign('curso_id')               -> references('id') -> on('cursos') -> onDelete('cascade');
            $table -> primary(['aula_id', 'curso_id']);

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
        Schema::dropIfExists('aula_curso');
    }
}

