<?php

use Illuminate\Database\Seeder;

class SoftwareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Software::class, 2)->create()->each(function ($u) {
        //    $u->save();
        //});
        #factory(App\Software::class, 10)->create();

        /*
        $software->nombre         = $request->nombre;
        $software->manualUsuario  = $request->manualUsuario;
        manualUsuario => '0' '1'
        $software->licencia       = $request->licencia;
        $software->disponibilidad = $request->disponibilidad; lugar de obtencion
        $software->clase          = $request->clase;
        clase => 'Libreria' 'Lenguaje' 'Case' 'Otro'
        */

        App\Software::create(array(
            'nombre'        => 'PHP',
            'manualUsuario' => '1',
            'licencia'      => 'Publica ',
            'disponibilidad'=> 'Internet',
            'clase'         => 'Lenguaje',
        ));

        App\Software::create(array(
            'nombre'        => 'C',
            'manualUsuario' => '1',
            'licencia'      => 'Publica ',
            'disponibilidad'=> 'Internet',
            'clase'         => 'Lenguaje',
        ));

        App\Software::create(array(
            'nombre'        => 'Laravel',
            'manualUsuario' => '1',
            'licencia'      => 'Publica ',
            'disponibilidad'=> 'Internet',
            'clase'         => 'Libreria',
        ));

        App\Software::create(array(
            'nombre'        => 'Go',
            'manualUsuario' => '0',
            'licencia'      => 'Publica ',
            'disponibilidad'=> 'Internet',
            'clase'         => 'Lenguaje',
        ));

        App\Software::create(array(
            'nombre'        => 'Matlab',
            'manualUsuario' => '1',
            'licencia'      => 'Privada ',
            'disponibilidad'=> 'Universidad de Sonora',
            'clase'         => 'Lenguaje',
        ));
    }
}
