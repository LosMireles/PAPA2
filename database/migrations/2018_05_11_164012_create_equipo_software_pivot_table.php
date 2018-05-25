<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoSoftwarePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_software', function (Blueprint $table) {
            $table -> integer('equipo_id')                   -> unsigned()       -> index();
            $table -> foreign('equipo_id')                   -> references('id') -> on('equipos')   -> onDelete('cascade');
            $table -> integer('software_id')                 -> unsigned()       -> index();
            $table -> foreign('software_id')                 -> references('id') -> on('softwares') -> onDelete('cascade');
            $table -> primary(['equipo_id', 'software_id']);

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
        Schema::dropIfExists('equipo_software');
    }
}

