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

        #factory(App\Asignatura::class, 10)->create();

        App\Asignatura::create(array(
            'nombre'        => 'Calculo Diferencial e Integral 2',
            'descripcion'   => 'Parte del análisis matemático que consiste en el estudio de cómo cambian las funciones cuando sus variables cambian. El principal objeto de estudio en el cálculo diferencial es la derivada.',
            'curso_id'      => '1',
        ));

        App\Asignatura::create(array(
            'nombre'        => 'Mecanica con Laboratorio',
            'descripcion'   => 'Rama de la física que estudia y analiza el movimiento y reposo de los cuerpos, y su evolución en el tiempo, bajo la acción de fuerzas.',
            'curso_id'      => '2',
        ));

        App\Asignatura::create(array(
            'nombre'        => 'Álgebra Lineal',
            'descripcion'   => 'Rama de las matemáticas que estudia conceptos tales como vectores, matrices, espacio dual, sistemas de ecuaciones lineales y en su enfoque de manera más formal, espacios vectoriales y sus transformaciones lineales.',
            'curso_id'      => '3',
        ));

        App\Asignatura::create(array(
            'nombre'        => 'Introducción a Ciencias de la Computación',
            'descripcion'   => 'Estudio de la teoría, la experimentación y la ingeniería que forman las bases para el diseño y uso de las computadoras.',
            'curso_id'      => '4',
        ));

        App\Asignatura::create(array(
            'nombre'        => 'Diseño de Algoritmos',
            'descripcion'   => 'Método específico para poder crear un modelo matemático ajustado a un problema específico para resolverlo.',
            'curso_id'      => '5',
        ));

        App\Asignatura::create(array(
            'nombre'        => 'Matematicas Discretas',
            'descripcion'   => 'Área de las matemáticas encargadas del estudio de los conjuntos discretos: finitos o infinitos numerables.',
            'curso_id'      => '6',
        ));

    }
}
