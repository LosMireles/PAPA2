<?php

use Illuminate\Database\Seeder;

class SanitarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*
    $sanitario->Tipo             = $request->Tipo;
    $sanitario->InicioHora       = $request->InicioHora;
    $sanitario->FinHora          = $request->FinHora;
    $sanitario->InicioDia        = $request->InicioDia;
    $sanitario->FinDia           = $request->FinDia;
    $sanitario->Limpieza         = $request->Limpieza;
    $sanitario->CantidadPersonal = $request->CantidadPersonal;
    $sanitario->espacio_id       = $request->espacio_id;
    */
        App\Sanitario::create(array(
            'Tipo'              => 'Sanitario 3K4',
            'InicioHora'        => '08:00 AM',
            'FinHora'           => '07:00 PM',
            'InicioDia'         => '01/01/2017',
            'FinDia'            => '01/01/2018',
            'Limpieza'          => '4',
            'CantidadPersonal'  => '2',
            'espacio_id'        => '6',
        ));

        App\Sanitario::create(array(
            'Tipo'              => 'Sanitario 3K2',
            'InicioHora'        => '06:00 AM',
            'FinHora'           => '07:00 PM',
            'InicioDia'         => '01/01/2017',
            'FinDia'            => '01/01/2018',
            'Limpieza'          => '3',
            'CantidadPersonal'  => '2',
            'espacio_id'        => '7',
        ));

        App\Sanitario::create(array(
            'Tipo'              => 'Sanitario Biblioteca',
            'InicioHora'        => '06:00 AM',
            'FinHora'           => '08:00 PM',
            'InicioDia'         => '01/01/2017',
            'FinDia'            => '01/01/2018',
            'Limpieza'          => '2',
            'CantidadPersonal'  => '2',
            'espacio_id'        => '8',
        ));
    }
}
