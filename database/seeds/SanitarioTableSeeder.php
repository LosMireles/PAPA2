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
    */
        App\Sanitario::create(array(
            'Tipo'              => 'Sanitario 3K4',
            'InicioHora'        => '08:00:00',
            'FinHora'           => '07:00:00',
            'InicioDia'         => '2017-01-01',
            'FinDia'            => '2018-01-01',
            'Limpieza'          => '4',
            'CantidadPersonal'  => '2',
        ));

        App\Sanitario::create(array(
            'Tipo'              => 'Sanitario 3K2',
            'InicioHora'        => '08:00:00',
            'FinHora'           => '07:00:00',
            'InicioDia'         => '2017-01-01',
            'FinDia'            => '2018-01-01',
            'Limpieza'          => '3',
            'CantidadPersonal'  => '2',
        ));

        App\Sanitario::create(array(
            'Tipo'              => 'Sanitario Biblioteca',
            'InicioHora'        => '08:00:00',
            'FinHora'           => '07:00:00',
            'InicioDia'         => '2017-01-01',
            'FinDia'            => '2018-01-01',
            'Limpieza'          => '2',
            'CantidadPersonal'  => '2',
        ));
    }
}
