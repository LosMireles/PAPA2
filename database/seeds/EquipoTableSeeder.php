<?php

use Illuminate\Database\Seeder;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Equipo::class, 3)->create()->each(function ($u) {
        //    $u->softwares()->save(factory(App\Software::class)->make());
        //});

        //factory(App\Equipo::class, 10)->create();

        App\Equipo::create(array(
            'serial'        => '12AN3900021',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-202',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900022',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-104',
            'tipo'          => 'servidor',
            'descripcion'   => 'Servidor http://cc.uson.mx. Servidor marca Dell Modelo Poweredge 2000'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900023',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-104',
            'tipo'          => 'servidor',
            'descripcion'   => 'Servidor marca Dell Modelo Poweredge 1950. Procesador Intel Xeon 5150'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900024',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-104',
            'tipo'          => 'servidor',
            'descripcion'   => 'Servidor marca Dell Modelo Poweredge 1950. Procesador Intel Xeon 5150'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900030',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-202',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900025',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-202',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900026',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-201',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900027',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-201',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900028',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-203',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'        => '12AN3900029',
            'manualUsuario' => 1,
            'operable'      => 1,
            'localizacion'  => '3K4-203',
            'tipo'          => 'computo',
            'descripcion'   => 'Equipo de cómputo de la licenciatura'
        ));
    }
}

