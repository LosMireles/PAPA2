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


        $equipos     = App\Equipo::with('softwares')->get();
        $softwaresId = App\Software::pluck('id');
        foreach($equipos as $equipo){
            if(sizeof($softwaresId) > 3){
                $equipo->softwares()->attach($softwaresId->random(3));
            }
            else{
                $equipo->softwares()->attach($softwaresId);
            }
        }

        $espacios = App\Espacio::with('cursos')->get();
        $cursosId = App\Curso::pluck('id');
        foreach($espacios as $espacio){
            if(sizeof($cursosId) > 3){
                $espacio->cursos()->attach($cursosId->random(3));
            }
            else{
                $espacio->cursos()->attach($cursosId);
            }
        }

        $asignaturas = App\Asignatura::with('softwares')->get();
        foreach($asignaturas as $asignatura){
            if(sizeof($softwaresId) > 3){
                $asignatura->softwares()->attach($softwaresId->random(3));
            }else{
                $asignatura->softwares()->attach($softwaresId);
            }
        }

    }
}

