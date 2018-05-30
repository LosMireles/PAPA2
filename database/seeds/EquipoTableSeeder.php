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
            'serial'            => '12AN3900021',
            'sistema_operativo' => 'Ubuntu',
            'tipo'              => 'Computo',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas' => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900022',
            'sistema_operativo' => 'Fedora',
            'tipo'              => 'Computo',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Servidor http://cc.uson.mx. Servidor marca Dell Modelo Poweredge 2000'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900023',
            'sistema_operativo' => 'Manjaro',
            'tipo'              => 'Computo',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Servidor marca Dell Modelo Poweredge 1950. Procesador Intel Xeon 5150'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900024',
            'sistema_operativo' => 'Linux Mint',
            'tipo'              => 'Redes',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Servidor marca Dell Modelo Poweredge 1950. Procesador Intel Xeon 5150'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900030',
            'sistema_operativo' => 'Windows 7',
            'tipo'              => 'Redes',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900025',
            'sistema_operativo' => 'Windows 8.1',
            'tipo'              => 'Computo',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900026',
            'sistema_operativo' => 'Windows XP',
            'tipo'              => 'Computo',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900027',
            'sistema_operativo' => 'Mac OS',
            'tipo'              => 'Audiovisual',

            'marca'             => 'Apple',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900028',
            'sistema_operativo' => 'Ubuntu',
            'tipo'              => 'Computo',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Equipo de cómputo de la licenciatura'
        ));

        App\Equipo::create(array(
            'serial'            => '12AN3900029',
            'sistema_operativo' => 'Ubuntu',
            'tipo'              => 'Servidor',

            'marca'             => 'Dell',
            'cpu'               => 'Intel i5',
            'almacenamiento'    => '1000',
            'ram'               => '8',
            'otras_caracteristicas'       => 'Equipo de cómputo de la licenciatura'
        ));
    }
}
