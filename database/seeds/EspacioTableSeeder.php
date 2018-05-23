<?php

use Illuminate\Database\Seeder;

class EspacioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #factory(App\Espacio::class, 10)->create();

    #### Auditorios ============================================ 1-5
        # espacio_id => 1
        App\Espacio::create(array(
            'tipo'      => 'Enrique Valle Flores',
            'superficie'=> '50',
            'cantidad'  => '1',
            'clase'     => 'Auditorio',

        ));
        # espacio_id => 2
        App\Espacio::create(array(
            'tipo'      => 'Sala de uso multiples de la División de Ciencias Exactas y Naturales',
            'superficie'=> '30',
            'cantidad'  => '1',
            'clase'     => 'Auditorio',
        ));
        # espacio_id => 3
        App\Espacio::create(array(
            'tipo'      => 'Sala de juntas 3K4',
            'superficie'=> '10',
            'cantidad'  => '1',
            'clase'     => 'Auditorio',

        ));
        # espacio_id => 4
        App\Espacio::create(array(
            'tipo'      => 'Auditorio de Dirección de Servicios Estundiantiles',
            'superficie'=> '45',
            'cantidad'  => '1',
            'clase'     => 'Auditorio',

        ));
        # espacio_id => 5
        App\Espacio::create(array(
            'tipo'      => 'Teatro Emiliana de Zubeldía',
            'superficie'=> '120',
            'cantidad'  => '1',
            'clase'     => 'Auditorio',

        ));

    #### Sanitarios ============================================ 6-8
    # espacio_id => 6
    App\Espacio::create(array(
        'tipo'      => 'Sanitario 3K4',
        'superficie'=> '30',
        'cantidad'  => '1',
        'clase'     => 'Sanitario',
    ));

    # espacio_id => 7
    App\Espacio::create(array(
        'tipo'      => 'Sanitario 3K2',
        'superficie'=> '30',
        'cantidad'  => '1',
        'clase'     => 'Sanitario',
    ));

    # espacio_id => 8
    App\Espacio::create(array(
        'tipo'      => 'Sanitario Biblioteca',
        'superficie'=> '30',
        'cantidad'  => '1',
        'clase'     => 'Sanitario',
    ));



    }
}
