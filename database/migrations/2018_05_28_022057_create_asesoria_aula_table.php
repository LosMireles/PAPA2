<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesoriaAulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesoria_aula', function (Blueprint $table) {

            $table -> integer('asesoria_id')           -> unsigned()       -> index();
            $table -> foreign('asesoria_id')           -> references('id') -> on('asesorias')  -> onDelete('cascade');
            $table -> integer('aula_id')               -> unsigned()       -> index();
            $table -> foreign('aula_id')               -> references('id') -> on('aulas') -> onDelete('cascade');
            $table -> primary(['asesoria_id', 'aula_id']);
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
        Schema::dropIfExists('aula_asesoria');
    }
}
