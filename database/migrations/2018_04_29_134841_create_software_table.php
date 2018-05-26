<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table -> increments('id')         -> unique()    -> unsigned();
            $table -> string('nombre')         -> unique();
            $table -> string('version')        -> nullable();
            $table -> boolean('manualUsuario') -> nullable();
            $table -> string('licencia')       -> nullable();
            $table -> string('disponibilidad') -> nullable();
            $table -> string('clase')          -> nullable();

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
        Schema::dropIfExists('softwares');
    }
}

