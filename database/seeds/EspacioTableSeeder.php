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
        factory(App\Espacio::class, 1)->create()->each(function ($u) {
            $u->cursos()->save(factory(App\Curso::class)->make());
        });
    }
}
