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

        $this->call(CursoTableSeeder::class);  //seeder asignatura hace esto
        $this->call(AsignaturaTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(SoftwareTableSeeder::class);
        $this->call(TecnicoAcademicoSeeder::class);
        $this->call(PreguntasTableSeeder::class);
        $this->call(AuditorioTableSeeder::class);
        $this->call(SanitarioTableSeeder::class);
        $this->call(CubiculoTableSeeder::class);
        $this->call(AulaTableSeeder::class);

    }
}
