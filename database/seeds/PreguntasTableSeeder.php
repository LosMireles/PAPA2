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

        App\Pregunta::create(array(
        	'inciso' => '9.1.3',
        	'numero' => '1',
        	'titulo' => 'Mencionar los servicios de cómputo existentes para cursos y actividades especializadas',
                        # Explicacion
                        # Cantidad de computadores en cada espacio que cuente con ellas
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.4',
        	'numero' => '1',
        	'titulo' => 'Mencionar el perfil y experiencia necesarios del personal responsable de los servicios de computo',
                        # explicacion:
                        # Preparacion academica de los tecnicos academicos
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.6',
        	'numero' => '1',
        	'titulo' => '¿Cuál es la descripción de las aulas en cuanto, higiene, seguridad, iluminación, ventilación, temperatura, aislamiento de ruido y mobiliario?',
                        # De que manera
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.7',
        	'numero' => '1',
        	'titulo' => 'Existen suficientes aulas para la impartición de cursos que se programen en cada período.',
                        # Tabla de cursos con su respectiva aula, numero de estudiantes, grupo y periodo
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.8',
        	'numero' => '1',
        	'titulo' => 'Número de aulas con equipo de cómputo permanentemente instalado.',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.8',
        	'numero' => '2',
        	'titulo' => 'Número de aulas con equipo de audiovisual permanentemente instalado.',
        	'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '1',
        	'titulo' => '¿Qué tipo de profesores cuenta con cubículos?',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '2',
        	'titulo' => '¿Qué otro tipo de lugar existe para trabajo del resto de los profesores?',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.10',
        	'numero' => '1',
        	'titulo' => '¿Existen espacios para asesorías a estudiantes?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.10',
        	'numero' => '2',
        	'titulo' => 'Si la respuesta es afirmativa. Describa los espacios para asesorías a estudiantes.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.11',
        	'numero' => '1',
        	'titulo' => '¿Cuáles son los auditorios y/o salas para actividades académicas, investigación, y de preservación y difusión de la cultura?',
                    # Describiendo sus principales caracteristicas y uso que se les da con relacion a estas actividades
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.11',
            'numero' => '2',
            'titulo' => '¿Cuáles son otros espacios disponibles en la institución?',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.11',
            'numero' => '3',
            'titulo' => '¿Para qué actividades se han utilizados estos espacios?',

            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '1',
            'titulo' => '¿Considera las facilidades sanitarias adecuadas?',

            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.1',
            'numero' => '1',
            'titulo' => 'Mencione los software que se utilizan en cada asignatura y su disponibilidad.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '1',
            'titulo' => 'Describa los lenguajes de programación utilizados en el programa',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '2',
            'titulo' => 'Describa las herramientas CASE utilizados en el programa',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '3',
            'titulo' => 'Describa los manejadores de base de datos utilizados en el programa',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '4',
            'titulo' => 'Describa la paqueteria en general utilizados en el programa',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '1',
            'titulo' => 'El equipo de cómputo de la institución, ¿esta conectado a la red?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '2',
            'titulo' => '¿Qué equipo de cómputo (servidores y clientes) soporta la red y cuáles son sus características?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '3',
            'titulo' => '¿Hay acceso a Internet a través de la red?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '4',
            'titulo' => '¿Cuál es el tiempo promedio disponible para cada estudiante a Internet por semana?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '5',
            'titulo' => '¿Con qué paquetes de software se cuenta en la red académica de la institución para apoyo del programa que se evalúa?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.11',
            'numero' => '1',
            'titulo' => '¿Los profesores cuentan con equipo de cómputo que les permita desempeñar adecuadamente su función?',
                    # Describa las herramientas con que cuentan los maestros para trabajar. Computadoras, acceso a internet, email, etc
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '1',
            'titulo' => '¿Existen técnicos de administración de sistemas de tiempo completo?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '2',
            'titulo' => '¿Participan estudiantes en el apoyo a las actividades de soporte técnico?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '3',
            'titulo' => '¿Es este nivel de soporte técnico adecuado?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '4',
            'titulo' => 'Si la respuesta anterior es afirmativa. Justifique.',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '5',
            'titulo' => 'Si la respuesta es no. Describa las limitantes existentes.',
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
            'titulo' => '¿El técnico asignado cuenta con un perfil adecuado para dar soporte a infraestructura, telecomunicaciones, redes, aplicaciones, desarrollo, entre otras? En cualquier caso explique brevemente.',
                    # Entre otrasÑ tecnologias emergentes, administracion, mineria de datos, soluciones intelignestes, reingeneria de procesos, TIC.
            'respuesta' => '',
        ));

        # -------------------------------------------------------------------------
    }
}
