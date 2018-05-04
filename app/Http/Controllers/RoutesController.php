<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
