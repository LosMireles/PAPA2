<?php

use Illuminate\Database\Seeder;

class AuditorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Auditorio::create(array(
            'nombre'                => 'Enrique Valle Flores',
            'capacidad'             => '130',
        ));

        App\Auditorio::create(array(
            'nombre'                => 'Sala de uso multiples de la División de Ciencias Exactas y Naturales',
            'capacidad'             => '30',
        ));

        App\Auditorio::create(array(
            'nombre'                => 'Sala de juntas 3K4',
            'capacidad'             => '12',
        ));

        App\Auditorio::create(array(
            'nombre'                => 'Auditorio de Dirección de Servicios Estundiantiles',
            'capacidad'             => '100',
        ));

        App\Auditorio::create(array(
            'nombre'                => 'Teatro Emiliana de Zubeldía',
            'capacidad'             => '460',
        ));


    }
}
