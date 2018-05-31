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
        	'inciso' => '9.1.1',
        	'numero' => '1',
        	'titulo' => 'Mencionar las condiciones de trabajo, seguridad e higiene de los servicios de cómputo.',
                        # Explicacion
                        # dimension de ares de trabajo, ventilación, iluminación, aire acondicionado, extinguidores, salidas de emergencia, depositos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.2',
        	'numero' => '1',
        	'titulo' => 'Exeptuando a los programas que correspondan al perfil de Licenciado en Informática, todos los programas deberán disponer de al menos un labaratorio de electrónica acondicionado que los soporte',
                # TABLE
                        # Explicacion
            'respuesta' => '',
        ));

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
            'inciso' => '9.1.5',
            'numero' => '1',
            'titulo' => '¿Se toma en cuenta la opinión de los profesores que participan en el programa para el diseño, equipamiento y operación de los servicios de cómputo?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.5',
            'numero' => '2',
            'titulo' => '¿De que manera?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
        	'inciso' => '9.1.6',
        	'numero' => '1',
        	'titulo' => '¿Cuál es la descripción de las aulas en cuanto, higiene, seguridad, iluminación, ventilación, temperatura, aislamiento de ruido y mobiliario?',
                # TABLE
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
            'titulo' => 'De los espacios mencionados en el inciso 9.1.11, se debe tener un lugar cómodo por cada diez estudiantes inscritos en el programa, ofreciendo las condiciones adecuadas de higiene y seguridad. ¿Cuántos lugares disponibles existen?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.12',
            'numero' => '2',
            'titulo' => '¿Ofrecen las condiciones adecuadas de higiene?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.12',
            'numero' => '3',
            'titulo' => '¿Ofrecen condiciones adecuadas de seguridad?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '1',
            'titulo' => '¿Considera las facilidades sanitarias adecuadas?',
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.1.13',
            'numero' => '2',
            'titulo' => 'En caso afirmativo sustente su respuesta',
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
            'titulo' => 'Describa los lenguajes de programación, las herramientas CASE, los manejadores de base de datos y la paquetería en general utilizados en el programa.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.3',
            'numero' => '1',
            'titulo' => 'Explique de qué manera se garantiza que el equipo de cómputo requerido esté disponible para la realización de las prácticas en las materias del programa que así lo requieran.',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.4',
            'numero' => '1',
            'titulo' => '¿Se cuenta con el número suficiente  de computadoras que estén disponibles y accesibles para los estudiantes del programa en función de el número de horas de infraestructura de cómputo requeridas por el Plan de Estudios.',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.5',
            'numero' => '1',
            'titulo' => 'Describir los tipos de plataforma de cómputo disponibles para los estudiantes y el personal docente.',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.6',
            'numero' => '1',
            'titulo' => 'Describir las capacidades de impresión disponibles para los estudiantes y el personal docente del programa.',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '1',
            'titulo' => 'El equipo de cómputo de la institución, ¿está  conectado a la red?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '2',
            'titulo' => 'En caso afirmativo, ¿Qué equipo de cómputo (servidores y clientes) soporta la red y cuáles son sus características?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '3',
            'titulo' => '¿Hay acceso a Internet a través de la red para profesores?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '4',
            'titulo' => '¿Hay acceso a Internet a través de la red para estudiantes?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '5',
            'titulo' => 'En caso afirmativo a la pregunta anterior, ¿Cuál es el tiempo promedio disponible para cada estudiante a Internet por semana?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.7',
            'numero' => '6',
            'titulo' => '¿Con qué paquetes de software se cuenta en la red académica de la institución para apoyo del programa que se evalúa?',
                    # Describalos
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.8',
            'numero' => '1',
            'titulo' => 'Describir la documentación para los sistema de hardware y software disponibles para los estudiantes y profesores. Explicar cómo los estudiantes y profesores tienen acceso adecuado a ala documentación, asi como el horario en que está disponible.',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.9',
            'numero' => '1',
            'titulo' => '¿Cuáles son los horarios de los Servicios de Cómputo con los que cuenta el programa?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.9',
            'numero' => '2',
            'titulo' => 'Si hay personal de apoyo. ¿Cuál es su horario, funciones y cantidad?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.9',
            'numero' => '3',
            'titulo' => '¿Qué tipo de personal está disponible para instalar, mantener y administrar el hardware, software y redes de la institución?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.10',
            'numero' => '1',
            'titulo' => '¿Existe un reglamento de los servicios de cómputo?',
                        # Explicacion
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.10',
            'numero' => '1',
            'titulo' => 'En caso afirmativo, ¿se encuentra disponible para los usuarios?',
                        # Explicacion
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
            'numero' => '1',
            'titulo' => '¿Existen registros de los usuarios de los servicio de cómputo?',
                    # Los datos deben estar organzados por periodos, tambien debe llevar un registro de los programas utilizados
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '1',
            'titulo' => '¿El técnico asignado cuenta con un perfil adecuado para dar soporte a infraestructura, telecomunicaciones, redes, aplicaciones, desarrollo, entre otras?',
                    # Responeder sí o no.
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '2',
            'titulo' => 'En cualquier caso explique brevemente.',
                    # Dar descripción.
            'respuesta' => '',
        ));

        App\Pregunta::create(array(
            'inciso' => '9.2.14',
            'numero' => '3',
            'titulo' => 'Proporcione el Currículum de cada uno, así como una lista de sus nombres, grados académicos, certificados pertinentes, años de experiencia en el área de competencia relacionados con lo aquí señalado',
                    # Dar descripción.
            'respuesta' => '',
        ));

        # -------------------------------------------------------------------------
    }
}
