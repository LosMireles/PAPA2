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
            'Tipo'                  => 'Enrique Valle Flores',
            'CantidadEquipo'        => '2',
            'CantidadAV'            => '1',
            'Capacidad'             => '130',
            'CantidadSanitarios'    => '2',
            'espacio_id'            => '1',
        ));

        App\Auditorio::create(array(
            'Tipo'                  => 'Sala de uso multiples de la División de Ciencias Exactas y Naturales',
            'CantidadEquipo'        => '1',
            'CantidadAV'            => '1',
            'Capacidad'             => '30',
            'CantidadSanitarios'    => '2',
            'espacio_id'            => '2',
        ));

        App\Auditorio::create(array(
            'Tipo'                  => 'Sala de juntas 3K4',
            'CantidadEquipo'        => '1',
            'CantidadAV'            => '1',
            'Capacidad'             => '12',
            'CantidadSanitarios'    => '4',
            'espacio_id'            => '3',
        ));

        App\Auditorio::create(array(
            'Tipo'                  => 'Auditorio de Dirección de Servicios Estundiantiles',
            'CantidadEquipo'        => '2',
            'CantidadAV'            => '2',
            'Capacidad'             => '100',
            'CantidadSanitarios'    => '2',
            'espacio_id'            => '4',
        ));

        App\Auditorio::create(array(
            'Tipo'                  => 'Teatro Emiliana de Zubeldía',
            'CantidadEquipo'        => '1',
            'CantidadAV'            => '1',
            'Capacidad'             => '460',
            'CantidadSanitarios'    => '4',
            'espacio_id'            => '5',
        ));


    }
}
