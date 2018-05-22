<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*
        App\Pregunta::create(array(
        	'inciso' => '9.2.7',
        	'numero' => '1',
        	'titulo' => 'Pregunta de la prueba',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.2.7',
        	'numero' => '2',
        	'titulo' => 'Pregunta esta es otra',
        	'respuesta' => '',
        ));
*/
        # Mis preguntas -----------------------------------------------------------
/*
        App\Pregunta::create(array(
        	'inciso' => '9.1.1',
        	'numero' => '1',
        	'titulo' => 'Mencionar las condiciones de trabajo, seguridad e higiene
                        de los servicios de computo.',
            # Explicacion extra:
            # Dimension de ares de trabajos, ventilacion, iluminacion, aire acondicionado,
            # extinguidores, salidas de emergencia, depositos, etc
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.2',
        	'numero' => '2',
        	'titulo' => 'Proporcionar la cantidad de laboratorios de electronica con los
                        que dispone la carrera',
        	'respuesta' => '',
        ));
*/
        App\Pregunta::create(array(
        	'inciso' => '9.1.3',
        	'numero' => '1',
        	'titulo' => 'Mencionar los servicios de computo existentes para cursos y actividades especializadas',
                        # Explicacion
                        # Cantidad de computadores en cada espacio que cuente con ellas
        	'respuesta' => '',
        2));

        App\Pregunta::create(array(
        	'inciso' => '9.1.4',
        	'numero' => '2',
        	'titulo' => 'Mencionar el perfil y experiencia necesarios del personal responsable de los servicios de computo',
                        # explicacion:
                        # Preparacion academica de los tecnicos academicos
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.5',
        	'numero' => '3',
        	'titulo' => 'Se toma en cuenta la opinion de los profesores que participan en el programa para el diseño, equipamiento y operación de los servicios de cómputo',
                        # De que manera
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.7',
        	'numero' => '4',
        	'titulo' => 'Existen suficientes aulas para la impartición de cursos que se programen en cada período.',
                        # Tabla de cursos con su respectiva aula, numero de estudiantes, grupo y periodo
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.8',
        	'numero' => '5',
        	'titulo' => 'Número de aulas con equipo de cómputo permanentemente instalado.',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.8',
        	'numero' => '6',
        	'titulo' => 'Número de aulas con equipo de audiovisual permanentemente instalado.',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '7',
        	'titulo' => 'Que tipo de profesores cuentan con cubículos',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '8',
        	'titulo' => 'Que otro tipo de lugar existe para el trabajo del resto de los profesores',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.10',
        	'numero' => '9',
        	'titulo' => 'Existen espacios para asesorías a estudiantes',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.11',
        	'numero' => '10',
        	'titulo' => 'Cual es la relación de los auditorios y/o salas para actividades académicas, investigación, y de preservación y difusión de la cultura.',
                    # Describiendo sus principales caracteristicas y uso que se les da con relacion a estas actividades
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '11',
            'titulo' => 'Considera las facilidades sanitarias adecuadas.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.1',
            'numero' => '12',
            'titulo' => 'Mencione los software que se utilizan y su disponibilidad.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '13',
            'titulo' => 'Describa los lenguajes de programacion, herramientas CASE, manejadores de base de datos y paqueteria en general utilizados',
                    # Describalos
            'respuesta' => '',
        ));


        App\Pregunta::create(array(
            'inciso' => '9.2.3',
            'numero' => '14',
            'titulo' => 'Explique de qué manera se garantiza que el equipo de cómputo reqeuerido esté disponible para la realización de las prácticas en las materias del programa que así lo requieran',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '15',
            'titulo' => 'El equipo de cómputo de la institución, ¿esta conectado a la red?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.13',
            'numero' => '16',
            'titulo' => '¿Existen registros de los usuarios de los serviciso de cómputo?',
                    # Describalos
            'respuesta' => '',
        ));

        # -------------------------------------------------------------------------
    }
}
