<?php

use Illuminate\Database\Seeder;

class CubiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $cubiculo->nombre           = $request->nombre;
        $cubiculo->profesor       = $request->profesor;
        $cubiculo->cantidad_equipo = $request->cantidad_equipo;
        */
        App\Cubiculo::create(array(
            'nombre'          => 'Cubiculo 1 3K4',
            'profesor'      => 'Olivia Gutu',
            'cantidad_equipo'=> '1',
        ));

        App\Cubiculo::create(array(
            'nombre'          => 'Cubiculo 2 3K4',
            'profesor'      => 'Julio Waissman',
            'cantidad_equipo'=> '1',
        ));

        App\Cubiculo::create(array(
            'nombre'          => 'Cubiculo 3 3K4',
            'profesor'      => 'Adrian Vazquez',
            'cantidad_equipo'=> '1',
        ));
    }
}
