<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EquipoSistemaOperativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_sistemaoperativo', function (Blueprint $table) {
            $table -> integer('equipo_id')                            -> unsigned()       -> index();
            $table -> foreign('equipo_id')                            -> references('id') -> on('equipos')             -> onDelete('cascade');
            $table -> integer('sistema_operativo_id')                 -> unsigned()       -> index();
            $table -> foreign('sistema_operativo_id')                 -> references('id') -> on('sistemas_operativos') -> onDelete('cascade');
            $table -> primary(['equipo_id', 'sistema_operativo_id']);

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
        Schema::dropIfExists('equipo_sistema_operativo');
    }
}

