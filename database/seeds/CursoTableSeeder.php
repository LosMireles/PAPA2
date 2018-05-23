<?php

use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # curso_id 1
        App\Curso::create(array(
            'nombre'        => 'Calculo Diferencial e Integral 2',
            'periodo'       => '2018-1',
            'grupo'         => '33',
            'noEstudiantes' => '30',
            'tipoAula'      => 'Aula',   # Laboratorio # Otro
            'pertenencia'   => 'LCC',   # LM # Otro
        ));
        # curso_id 2
        App\Curso::create(array(
            'nombre'        => 'Mecanica con Laboratorio',
            'periodo'       => '2018-1',
            'grupo'         => '6',
            'noEstudiantes' => '18',
            'tipoAula'      => 'Laboratorio',   # Laboratorio # Otro
            'pertenencia'   => 'LCC',   # LM # Otro
        ));
        # curso_id 3
        App\Curso::create(array(
            'nombre'        => 'Álgebra Lineal',
            'periodo'       => '2018-1',
            'grupo'         => '4',
            'noEstudiantes' => '20',
            'tipoAula'      => 'Aula',   # Laboratorio # Otro
            'pertenencia'   => 'LCC',   # LM # Otro
        ));
        # curso_id 4
        App\Curso::create(array(
            'nombre'        => 'Introducción a Ciencias de la Computación',
            'periodo'       => '2018-1',
            'grupo'         => '1',
            'noEstudiantes' => '40',
            'tipoAula'      => 'Aula',   # Laboratorio # Otro
            'pertenencia'   => 'LCC',   # LM # Otro
        ));
        # curso_id 5
        App\Curso::create(array(
            'nombre'        => 'Diseño de Algoritmos',
            'periodo'       => '2018-1',
            'grupo'         => '1',
            'noEstudiantes' => '40',
            'tipoAula'      => 'Aula',   # Laboratorio # Otro
            'pertenencia'   => 'LCC',   # LM # Otro
        ));
        # curso_id 6
        App\Curso::create(array(
            'nombre'        => 'Matematicas Discretas',
            'periodo'       => '2018-1',
            'grupo'         => '1',
            'noEstudiantes' => '40',
            'tipoAula'      => 'Aula',   # Laboratorio # Otro
            'pertenencia'   => 'LCC',   # LM # Otro
        ));
    }
}
