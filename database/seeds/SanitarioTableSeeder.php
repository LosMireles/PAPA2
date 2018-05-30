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
    $sanitario->nombre             = $request->nombre;
    $sanitario->InicioHora       = $request->InicioHora;
    $sanitario->FinHora          = $request->FinHora;
    $sanitario->InicioDia        = $request->InicioDia;
    $sanitario->FinDia           = $request->FinDia;
    $sanitario->Limpieza         = $request->Limpieza;
    $sanitario->CantidadPersonal = $request->CantidadPersonal;
    */
        App\Sanitario::create(array(
            'nombre'=> 'Sanitario 3K4',
            'sexo'  => 'Hombres',
        ));

        App\Sanitario::create(array(
            'nombre'=> 'Sanitario 3K2',
            'sexo'  => 'Mujeres',
        ));

        App\Sanitario::create(array(
            'nombre'=> 'Sanitario Biblioteca',
            'sexo'  => 'Unisex',
        ));
    }
}
