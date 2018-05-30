<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pregunta;
use App\Auditorio;
use App\TecnicoAcademico;
use App\Curso;
use App\Aula;
use App\Equipo;
use App\Software;
use App\Cubiculo;
use App\Asesoria;

use DB;

class RoutesController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function infraestructura(){
    	return view('infraestructura/infraestructura_index');
    }

	public function equipamiento(){
    	return view('equipamiento/equipamiento_index');
    }

    public function Espacio(){
        return view('infraestructura/espacio/espacio_index');
    }

    public function Aula(){
    	return view('infraestructura/aula/aula_index');
    }

    public function Cubiculo(){
    	return view('infraestructura/cubiculo/cubiculo_index');
    }

    public function Software(){
    	return view('equipamiento/software/software_index');
    }

    public function Asesoria(){
        return view('infraestructura/asesoria/asesoria_index');
    }

    public function Sanitario(){
      return view('infraestructura/sanitario/sanitario_index');
    }

    public function Auditorio(){
        return view('infraestructura/auditorio/auditorio_index');
    }

    public function Curso(){
      return view('infraestructura/curso/curso_index');
    }

    public function generar_reporte(){
        $preguntas_9_1_12 = Pregunta::where('inciso', '9.1.12')->get();
        $preguntas_9_1_4 = Pregunta::where('inciso', '9.1.4')->get();
        $preguntas_9_2_12 = Pregunta::where('inciso', '9.2.12')->get();
        $preguntas_9_2_1 = Pregunta::where('inciso', '9.2.1')->get();
        $preguntas_9_1_7 = Pregunta::where('inciso', '9.1.7')->get();
        $preguntas_9_2_14 = Pregunta::where('inciso', '9.2.14')->get();
        $preguntas_9_1_8 = Pregunta::where('inciso', '9.1.8')->get();
        $preguntas_9_2_5 = Pregunta::where('inciso', '9.2.5')->get();
        $preguntas_9_2_7 = Pregunta::where('inciso', '9.2.7')->get();
        $preguntas_9_2_2 = Pregunta::where('inciso', '9.2.2')-> get();
        $preguntas_9_1_6 = Pregunta::where('inciso', '9.1.6')->get();
        $preguntas_9_1_9 = Pregunta::where('inciso', '9.1.9')->get();
        $preguntas_9_2_11 = Pregunta::where('inciso', '9.2.11')->get();
        $preguntas_9_1_10 = Pregunta::where('inciso', '9.1.10')->get();

        $cursos_softwares = DB::table('curso_software')->get();
        $cursosLCC = Curso::where('departamento', 'LCC')->get();
        $cursosLM = Curso::where('departamento', 'LM')->get();
        $cursosOtros = Curso::where('departamento', 'Otros')->get();

        $lenguajes   = Software::where('clase', 'Lenguaje')     -> pluck('nombre');
        $cases       = Software::where('clase', 'Case')         -> pluck('nombre');
        $bds         = Software::where('clase', 'Manejador BD') -> pluck('nombre');
        $paqueterias = Software::where('clase', 'Paqueteria')   -> pluck('nombre');
        $otros = Software::where('clase', 'Otro')               -> pluck('nombre');

        $cursos = Curso::all();
        $aulas = Aula::all();
        $equipos = Equipo::all();
        $tecnicos  = TecnicoAcademico::all();
        $auditorios = Auditorio::all();
        $cubiculos = Cubiculo::all();
        $asesorias = Asesoria::all();

        return view('reporte')->with([  'preguntas_9_1_12'  => $preguntas_9_1_12,
                                        'preguntas_9_1_4'   => $preguntas_9_1_4,
                                        'preguntas_9_2_12'  => $preguntas_9_2_12,
                                        'preguntas_9_2_1'   => $preguntas_9_2_1,
                                        'preguntas_9_1_7'   => $preguntas_9_1_7,
                                        'preguntas_9_2_14'  => $preguntas_9_2_14,
                                        'preguntas_9_1_8'   => $preguntas_9_1_8,
                                        'preguntas_9_2_5'   => $preguntas_9_2_5,
                                        'preguntas_9_2_7'   => $preguntas_9_2_7,
                                        'preguntas_9_2_2'   => $preguntas_9_2_2,
                                        'preguntas_9_1_6'   => $preguntas_9_1_6,
                                        'preguntas_9_1_9'   => $preguntas_9_1_9,
                                        'preguntas_9_2_11'  => $preguntas_9_2_11,
                                        'preguntas_9_1_10'  => $preguntas_9_1_10,

                                        'cursos'            => $cursos,
                                        'tecnicos'          => $tecnicos,
                                        'auditorios'        => $auditorios,
                                        'aulas'             => $aulas,
                                        'equipos'           => $equipos,
                                        'cubiculos'         => $cubiculos,
                                        'asesorias'         => $asesorias,

                                        'cursos_softwares'  => $cursos_softwares,
                                        'cursosLCC'         => $cursosLCC,
                                        'cursosLM'          => $cursosLM,
                                        'cursosOtros'       => $cursosOtros,
                                        'lenguajes'         => $lenguajes,
                                        'cases'             => $cases,
                                        'bds'               => $bds,
                                        'paqueterias'       => $paqueterias,
                                        'otros'             => $otros]);
    }
}
