<?php

use Illuminate\Database\Seeder;

class AulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $aula->Tipo           = $request->Tipo;
    	$aula->CantidadEquipo = $request->CantidadEquipo;
    	$aula->CantidadAV     = $request->CantidadAV;
    	$aula->Capacidad      = $request->Capacidad;

        $aula->SillasPaleta = '1'; '0'
        $aula->MesasTrabajo = '1'; '0'
        $aula->Isotopica = '1'; '0'
        $aula->Estrado = '1'; '0'

         los siguientes van de 1-4
        $aula->Pizarron     = $request->Pizarron;
        $aula->Illuminacion = $request->Illuminacion;
        $aula->AislamientoR = $request->AislamientoR;
        $aula->Ventilacion  = $request->Ventilacion;
        $aula->Temperatura  = $request->Temperatura;
        $aula->Espacio      = $request->Espacio;
        $aula->Mobilario    = $request->Mobilario;
        $aula->Conexiones   = $request->Conexiones;
        */
        App\Aula::create(array(
            'Tipo'          => '3K4-A101',
            'CantidadEquipo'=> '1',
            'CantidadAV'    => '2',
            'Capacidad'     => '40',

            'SillasPaleta'  => '1',
            'MesasTrabajo'  => '0',
            'Isotopica'     => '1',
            'Estrado'       => '0',

            'Pizarron'      => '2',
            'Illuminacion'  => '3',
            'AislamientoR'  => '4',
            'Ventilacion'   => '1',
            'Temperatura'   => '2',
            'Espacio'       => '4',
            'Mobilario'     => '3',
            'Conexiones'    => '2',
        ));

        App\Aula::create(array(
            'Tipo'          => '3K4-A102',
            'CantidadEquipo'=> '1',
            'CantidadAV'    => '1',
            'Capacidad'     => '30',

            'SillasPaleta'  => '1',
            'MesasTrabajo'  => '0',
            'Isotopica'     => '1',
            'Estrado'       => '0',

            'Pizarron'      => '2',
            'Illuminacion'  => '3',
            'AislamientoR'  => '4',
            'Ventilacion'   => '1',
            'Temperatura'   => '2',
            'Espacio'       => '4',
            'Mobilario'     => '3',
            'Conexiones'    => '2',
        ));

        App\Aula::create(array(
            'Tipo'          => '3K2-A201',
            'CantidadEquipo'=> '0',
            'CantidadAV'    => '2',
            'Capacidad'     => '20',

            'SillasPaleta'  => '1',
            'MesasTrabajo'  => '0',
            'Isotopica'     => '1',
            'Estrado'       => '0',

            'Pizarron'      => '2',
            'Illuminacion'  => '3',
            'AislamientoR'  => '4',
            'Ventilacion'   => '1',
            'Temperatura'   => '2',
            'Espacio'       => '4',
            'Mobilario'     => '3',
            'Conexiones'    => '2',
        ));

        App\Aula::create(array(
            'Tipo'          => '3K2-A301',
            'CantidadEquipo'=> '0',
            'CantidadAV'    => '2',
            'Capacidad'     => '20',

            'SillasPaleta'  => '1',
            'MesasTrabajo'  => '0',
            'Isotopica'     => '1',
            'Estrado'       => '0',

            'Pizarron'      => '2',
            'Illuminacion'  => '3',
            'AislamientoR'  => '4',
            'Ventilacion'   => '1',
            'Temperatura'   => '2',
            'Espacio'       => '4',
            'Mobilario'     => '3',
            'Conexiones'    => '2',
        ));

        App\Aula::create(array(
            'Tipo'          => '3K2-A303',
            'CantidadEquipo'=> '0',
            'CantidadAV'    => '2',
            'Capacidad'     => '20',

            'SillasPaleta'  => '1',
            'MesasTrabajo'  => '0',
            'Isotopica'     => '1',
            'Estrado'       => '0',

            'Pizarron'      => '2',
            'Illuminacion'  => '3',
            'AislamientoR'  => '4',
            'Ventilacion'   => '1',
            'Temperatura'   => '2',
            'Espacio'       => '4',
            'Mobilario'     => '3',
            'Conexiones'    => '2',
        ));

        App\Aula::create(array(
            'Tipo'          => '3K1-L101',
            'CantidadEquipo'=> '0',
            'CantidadAV'    => '2',
            'Capacidad'     => '20',
            
            'SillasPaleta'  => '1',
            'MesasTrabajo'  => '0',
            'Isotopica'     => '1',
            'Estrado'       => '0',

            'Pizarron'      => '2',
            'Illuminacion'  => '3',
            'AislamientoR'  => '4',
            'Ventilacion'   => '1',
            'Temperatura'   => '2',
            'Espacio'       => '4',
            'Mobilario'     => '3',
            'Conexiones'    => '2',
        ));

    }
}
