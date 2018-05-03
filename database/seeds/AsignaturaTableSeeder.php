<?php

use Illuminate\Database\Seeder;

class AsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Asignatura::class, 5)->create()->each(function ($u) {
            $u->save();
        });
    }
}
