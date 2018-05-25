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
            $table -> increments('id')         -> unique()    -> unsigned();
            $table -> string('serial')         -> unique();
            $table -> string('marca')          -> nullable();
            $table -> boolean('manualUsuario') -> nullable();
            $table -> boolean('operable')      -> nullable();
            $table -> string('localizacion')   -> nullable();
            $table -> string('tipo')           -> nullable();
            $table -> longText('descripcion')  -> nullable();

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

