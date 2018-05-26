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
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.4',
        	'numero' => '1',
        	'titulo' => 'Mencionar el perfil y experiencia necesarios del personal responsable de los servicios de computo',
                        # explicacion:
                        # Preparacion academica de los tecnicos academicos
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.6',
        	'numero' => '1',
        	'titulo' => '¿Cuál es la descripción de las aulas en cuanto, higiene, seguridad, iluminación, ventilación, temperatura, aislamiento de ruido y mobiliario?',
                        # De que manera
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.7',
        	'numero' => '1',
        	'titulo' => 'Existen suficientes aulas para la impartición de cursos que se programen en cada período.',
                        # Tabla de cursos con su respectiva aula, numero de estudiantes, grupo y periodo
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.8',
        	'numero' => '1',
        	'titulo' => 'Número de aulas con equipo de cómputo permanentemente instalado.',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.8',
        	'numero' => '2',
        	'titulo' => 'Número de aulas con equipo de audiovisual permanentemente instalado.',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '1',
        	'titulo' => '¿Qué tipo de profesores cuenta con cubículos?',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.9',
        	'numero' => '2',
        	'titulo' => '¿Qué otro tipo de lugar existe para trabajo del resto de los profesores?',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.10',
        	'numero' => '1',
        	'titulo' => '¿Existen espacios para asesorías a estudiantes?',
                    # Describalos
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.10',
        	'numero' => '2',
        	'titulo' => 'Si la respuesta es afirmativa. Describa los espacios para asesorías a estudiantes.',
                    # Describalos
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.11',
        	'numero' => '1',
        	'titulo' => '¿Cuáles son los auditorios y/o salas para actividades académicas, investigación, y de preservación y difusión de la cultura?',
                    # Describiendo sus principales caracteristicas y uso que se les da con relacion a estas actividades
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.11',
            'numero' => '2',
            'titulo' => '¿Cuáles son otros espacios disponibles en la institución?',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.11',
            'numero' => '3',
            'titulo' => '¿Para qué actividades se han utilizados estos espacios?',

        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.12',
        	'numero' => '1',
        	'titulo' => '¿Numero de lugares disponibles?',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.12',
            'numero' => '2',
            'titulo' => '¿Ofrece condiciones adecuadas de higiene?',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.12',
            'numero' => '3',
            'titulo' => '¿Ofrece condiciones adecuadas de seguridad?',

        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '1',
            'titulo' => '¿Considera las facilidades sanitarias adecuadas?',

        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '2',
            'titulo' => 'En caso afirmativo sustente su respuesta',

        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.1',
            'numero' => '1',
            'titulo' => 'Mencione los software que se utilizan en cada asignatura y su disponibilidad.',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '1',
            'titulo' => 'Describa los lenguajes de programación utilizados en el programa',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '2',
            'titulo' => 'Describa las herramientas CASE utilizados en el programa',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '3',
            'titulo' => 'Describa los manejadores de base de datos utilizados en el programa',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.2',
            'numero' => '4',
            'titulo' => 'Describa la paqueteria en general utilizados en el programa',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.5',
            'numero' => '1',
            'titulo' => 'Describir los tipos de plataforma de cómputo disponibles para los estudiantes y el personal docente.',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '1',
            'titulo' => 'El equipo de cómputo de la institución, ¿esta conectado a la red?',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '2',
            'titulo' => '¿Qué equipo de cómputo (servidores y clientes) soporta la red y cuáles son sus características?',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '3',
            'titulo' => '¿Hay acceso a Internet a través de la red para profesores?',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '4',
            'titulo' => '¿Hay acceso a Internet a través de la red para estudiantes?',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '5',
            'titulo' => '¿Cuál es el tiempo promedio disponible para cada estudiante a Internet por semana?',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '6',
            'titulo' => '¿Con qué paquetes de software se cuenta en la red académica de la institución para apoyo del programa que se evalúa?',
                    # Describalos
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.11',
            'numero' => '1',
            'titulo' => '¿Los profesores cuentan con equipo de cómputo que les permita desempeñar adecuadamente su función?',
                    # Describa las herramientas con que cuentan los maestros para trabajar. Computadoras, acceso a internet, email, etc
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '1',
            'titulo' => '¿Existen técnicos de administración de sistemas de tiempo completo?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '2',
            'titulo' => '¿Participan estudiantes en el apoyo a las actividades de soporte técnico?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '3',
            'titulo' => '¿Es este nivel de soporte técnico adecuado?',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '4',
            'titulo' => 'Si la respuesta anterior es afirmativa. Justifique.',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.12',
            'numero' => '5',
            'titulo' => 'Si la respuesta es no. Describa las limitantes existentes.',
                    # Describir al tecnico, alumnos se ven involucrados?, quien lo asigna
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.13',
            'numero' => '1',
            'titulo' => '¿Existen registros de los usuarios de los servicio de cómputo?',
                    # Los datos deben estar organzados por periodos, tambien debe llevar un registro de los programas utilizados
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '1',
            'titulo' => '¿El técnico asignado cuenta con un perfil adecuado para dar soporte a infraestructura, telecomunicaciones, redes, aplicaciones, desarrollo, entre otras?',
                    # Responeder sí o no.
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '2',
            'titulo' => 'En cualquier caso explique brevemente.',
                    # Dar descripción.
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '3',
            'titulo' => 'Proporcione el Curriculum de cada uno, así como una lista de sus nombres, grados académicos, certificados pertinenetes, años de experiencia en el área de competencia relacionados con lo aquí señalado',
                    # Dar descripción.
        ));

        # -------------------------------------------------------------------------
    }
}
