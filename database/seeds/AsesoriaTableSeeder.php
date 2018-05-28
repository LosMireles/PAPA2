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
        App\Asesoria::create(array(
            'nombre'        => '10G303'
        ));

        App\Asesoria::create(array(
            'nombre'        => '3K1202'
        ));

        App\Asesoria::create(array(
            'nombre'        => '3k4101'
        ));

        App\Asesoria::create(array(
            'nombre'        => '5G202'
        ));

        App\Asesoria::create(array(
            'nombre'        => '5P202'
        ));
    }
}
