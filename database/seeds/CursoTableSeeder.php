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
            'no_grupo'      => '33',
            'no_estudiantes'=> '30',
            'departamento'  => 'LCC',   # LM # Otro
        ));
        # curso_id 2
        App\Curso::create(array(
            'nombre'        => 'Mecanica con Laboratorio',
            'periodo'       => '2018-1',
            'no_grupo'      => '6',
            'no_estudiantes'=> '18',
            'departamento'  => 'LCC',   # LM # Otro
        ));
        # curso_id 3
        App\Curso::create(array(
            'nombre'        => 'Álgebra Lineal',
            'periodo'       => '2018-1',
            'no_grupo'      => '4',
            'no_estudiantes'=> '20',
            'departamento'  => 'LCC',   # LM # Otro
        ));
        # curso_id 4
        App\Curso::create(array(
            'nombre'        => 'Introducción a Ciencias de la Computación',
            'periodo'       => '2018-1',
            'no_grupo'      => '1',
            'no_estudiantes'=> '40',
            'departamento'  => 'LCC',   # LM # Otro
        ));
        # curso_id 5
        App\Curso::create(array(
            'nombre'        => 'Diseño de Algoritmos',
            'periodo'       => '2018-1',
            'no_grupo'      => '1',
            'no_estudiantes'=> '40',
            'departamento'  => 'LCC',   # LM # Otro
        ));
        # curso_id 6
        App\Curso::create(array(
            'nombre'        => 'Matematicas Discretas',
            'periodo'       => '2018-1',
            'no_grupo'      => '1',
            'no_estudiantes'=> '40',
            'departamento'  => 'LCC',   # LM # Otro
        ));
    }
}
