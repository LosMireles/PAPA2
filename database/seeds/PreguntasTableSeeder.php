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
        	'inciso' => '9.1.6',
        	'numero' => '3',
        	'titulo' => '¿Cuál es la descripción de las aulas en cuanto, higiene, seguridad, iluminación, ventilación, temperatura, aislamiento de ruido y mobiliario?',
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
        	'titulo' => 'Número de aulas con equipo de cómputo y audiovisual permanentemente instalado.',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '6',
        	'titulo' => '¿Que espacios de trabajo cuentan los profesores?',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.10',
        	'numero' => '7',
        	'titulo' => '¿Existen espacios para asesorías a estudiantes?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.11',
        	'numero' => '8',
        	'titulo' => '¿Cual es la relación de los auditorios y/o salas para actividades académicas, investigación, y de preservación y difusión de la cultura?',
                    # Describiendo sus principales caracteristicas y uso que se les da con relacion a estas actividades
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '9',
            'titulo' => '¿Considera las facilidades sanitarias adecuadas?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.1',
            'numero' => '10',
            'titulo' => 'Mencione los software que se utilizan y su disponibilidad.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '11',
            'titulo' => 'Describa los lenguajes de programacion, herramientas CASE, manejadores de base de datos y paqueteria en general utilizados',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '12',
            'titulo' => 'El equipo de cómputo de la institución, ¿esta conectado a la red?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.11',
            'numero' => '13',
            'titulo' => '¿Los profesores cuentan con equipo de cómputo que les permita desempeñar adecuadamente su función?',
                    # Describa las herramientas con que cuentan los maestros para trabajar. Computadoras, acceso a internet, email, etc
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '14',
            'titulo' => '¿Existen técnicos de administración de sistemas de tiempo completo?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.13',
            'numero' => '15',
            'titulo' => '¿Existen registros de los usuarios de los servicio de cómputo?',
                    # Los datos deben estar organzados por periodos, tambien debe llevar un registro de los programas utilizados
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '16',
            'titulo' => '¿El técnico asignado cuenta con un perfil adecuado para dar soporte a infraestructura, telecomunicaciones, redes, aplicaciones, desarrollo, entre otras?',
                    # Entre otrasÑ tecnologias emergentes, administracion, mineria de datos, soluciones intelignestes, reingeneria de procesos, TIC.
            'respuesta' => '',
        ));

        # -------------------------------------------------------------------------
    }
}
