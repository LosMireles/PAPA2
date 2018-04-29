<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EspacioTableSeeder::class,
            CursoTableSeeder::class,
            EquipoTableSeeder::class,
            SoftwareTableSeeder::class,
        ]);
    }
}
