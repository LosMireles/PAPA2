<?php

use Illuminate\Database\Seeder;

class AsesoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $asesoria->Tipo       = $request->Tipo;
        $asesoria->InicioHora = $request->InicioHora;
        $asesoria->FinHora    = $request->FinHora;
        $asesoria->InicioDia  = $request->InicioDia;
        $asesoria->FinDia     = $request->FinDia;
        $asesoria->Materia    = $request->Materia;
        */
        App\Asesoria::create(array(
            'Tipo'              => 'Asesoria Calculo',
            'InicioHora'        => '04:00:00',
            'FinHora'           => '05:00:00',
            'InicioDia'         => '2017-05-01',
            'FinDia'            => '2017-06-01',
            'Materia'           => 'Calculo Diferencial e Integral 2',
        ));

        App\Asesoria::create(array(
            'Tipo'              => 'Asesoria Álgebra',
            'InicioHora'        => '04:00:00',
            'FinHora'           => '05:00:00',
            'InicioDia'         => '2017-05-01',
            'FinDia'            => '2017-06-01',
            'Materia'           => 'Álgebra Lineal',
        ));

        App\Asesoria::create(array(
            'Tipo'              => 'Asesoria Mecanica',
            'InicioHora'        => '04:00:00',
            'FinHora'           => '05:00:00',
            'InicioDia'         => '2017-05-01',
            'FinDia'            => '2017-06-01',
            'Materia'           => 'Mecanica con Laboratorio ',
        ));
    }
}
