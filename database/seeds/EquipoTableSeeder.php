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
        factory(App\Equipo::class, 3)->create()->each(function ($u) {
            $u->softwares()->save(factory(App\Software::class)->make());
        });
    }
}