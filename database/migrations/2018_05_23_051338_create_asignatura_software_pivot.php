<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaSoftwarePivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_software', function (Blueprint $table) {
            $table -> integer('asignatura_id')                   -> unsigned()       -> index();
            $table -> foreign('asignatura_id')                   -> references('id') -> on('asignaturas') -> onDelete('cascade');
            $table -> integer('software_id')                     -> unsigned()       -> index();
            $table -> foreign('software_id')                     -> references('id') -> on('softwares')   -> onDelete('cascade');
            $table -> primary(['asignatura_id', 'software_id']);

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
        Schema::dropIfExists('asignatura_software');
    }
}
