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
        $this->call(CursoTableSeeder::class);  //seeder asignatura hace esto
        $this->call(AsignaturaTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(SoftwareTableSeeder::class);
        $this->call(TecnicoAcademicoSeeder::class);
        $this->call(PreguntasTableSeeder::class);
        $this->call(AuditorioTableSeeder::class);
        $this->call(SanitarioTableSeeder::class);
        $this->call(AsesoriaTableSeeder::class);
        $this->call(CubiculoTableSeeder::class);
        $this->call(AulaTableSeeder::class);


        $equipos   = App\Equipo::all();
        foreach($equipos as $equipo){
            $equipo->softwares()->attach(random_int(1, 10));
        }

        $espacios = App\Espacio::all();
        foreach($espacios as $espacio){
            $espacio->cursos()->attach(random_int(15,20));
        }
    }
}
