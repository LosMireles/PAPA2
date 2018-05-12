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
        $this->call(EspacioTableSeeder::class);
        $this->call(CursoTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(SoftwareTableSeeder::class);
        $this->call(AsignaturaTableSeeder::class);

        $equipos = App\Equipo::all();
        foreach($equipos as $equipo){
            $equipo->softwares()->attach(rand(1, 10));
        }
    }
}
