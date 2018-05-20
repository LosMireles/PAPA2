<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table -> increments('id')          -> unique()  -> unsigned();
            $table -> string('serial')          -> unique();
            $table -> boolean('manualUsuario');
            $table -> boolean('operable');
            $table -> string('localizacion');
            $table -> string('tipo');
            $table -> longText('descripcion');

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
        Schema::dropIfExists('equipos');
    }
}
