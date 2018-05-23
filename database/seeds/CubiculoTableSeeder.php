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
        $cubiculo->Tipo           = $request->Tipo;
        $cubiculo->Profesor       = $request->Profesor;
        $cubiculo->CantidadEquipo = $request->CantidadEquipo;
        $cubiculo->espacio_id       = $request->espacio_id;
        */
        App\Cubiculo::create(array(
            'Tipo'          => 'Cubiculo 1 3K4',
            'Profesor'      => 'Olivia Gutu',
            'CantidadEquipo'=> '1',
            'espacio_id'    => '12',
        ));

        App\Cubiculo::create(array(
            'Tipo'          => 'Cubiculo 2 3K4',
            'Profesor'      => 'Julio Waissman',
            'CantidadEquipo'=> '1',
            'espacio_id'    => '13',
        ));

        App\Cubiculo::create(array(
            'Tipo'          => 'Cubiculo 3 3K4',
            'Profesor'      => 'Adrian Vazquez',
            'CantidadEquipo'=> '1',
            'espacio_id'    => '14',
        ));
    }
}
