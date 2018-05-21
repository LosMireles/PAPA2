<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pregunta::create(array(
        	'inciso' => '9.2.7',
        	'numero' => '1',
        	'titulo' => 'Pregunta de la prueba',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.2.7',
        	'numero' => '2',
        	'titulo' => 'Pregunta esta es otra',
        	'respuesta' => '',
        ));
    }
}
