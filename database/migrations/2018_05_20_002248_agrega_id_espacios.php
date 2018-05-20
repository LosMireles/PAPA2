<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaIdEspacios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('cubiculos', function($table){
            $table->integer('espacio_id')->unsigned();
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
        });

        schema::table('asesorias', function($table){
            $table->integer('espacio_id')->unsigned();
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
        });

        schema::table('sanitarios', function($table){
            $table->integer('espacio_id')->unsigned();
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
        });

        schema::table('auditorios', function($table){
            $table->integer('espacio_id')->unsigned();
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
        });

        schema::table('aulas', function($table){
            $table->integer('espacio_id')->unsigned()->nullable();
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
