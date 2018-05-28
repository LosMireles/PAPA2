<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_software', function (Blueprint $table) {
            $table -> integer('curso_id')                   -> unsigned()       -> index();
            $table -> foreign('curso_id')                   -> references('id') -> on('cursos') -> onDelete('cascade');
            $table -> integer('software_id')                     -> unsigned()       -> index();
            $table -> foreign('software_id')                     -> references('id') -> on('softwares')   -> onDelete('cascade');
            $table -> primary(['curso_id', 'software_id']);

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
        Schema::dropIfExists('curso_software');
    }
}
