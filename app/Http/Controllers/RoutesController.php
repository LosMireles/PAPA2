<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pregunta;
use App\Auditorio;
use App\TecnicoAcademico;
use App\Curso;

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

        $cursos_softwares = DB::table('curso_software')->get();
        
        $cursos = Curso::all();
        $tecnicos  = TecnicoAcademico::all();
        $auditorios = Auditorio::all();

        return view('reporte')->with([  'preguntas_9_1_12'  => $preguntas_9_1_12,
                                        'preguntas_9_1_4'   => $preguntas_9_1_4,
                                        'preguntas_9_2_12'  => $preguntas_9_2_12,
                                        'preguntas_9_2_1'   => $preguntas_9_2_1,

                                        'cursos'            => $cursos,
                                        'tecnicos'          => $tecnicos,
                                        'auditorios'        => $auditorios,
                                        'cursos_softwares'  => $cursos_softwares]);
    }
}
