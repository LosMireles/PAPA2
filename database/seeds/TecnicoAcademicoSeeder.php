<?php

use Illuminate\Database\Seeder;

class TecnicoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TecnicoAcademico::class, 10)->create();
    }
}
