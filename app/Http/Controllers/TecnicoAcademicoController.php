<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TecnicoAcademico;
use App\Software;
use App\Equipo;
use App\Espacio;

class TecnicoAcademicoController extends Controller
{
    public function index(){
    	return view('tecnico_academico/index');
    }

    public function insertar(){
    	$espacios = Espacio::all();
    	$dias_semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
    	return view('tecnico_academico/tecnico_academico_create',['espacios' => $espacios, 'dias_semana' => $dias_semana]);
    }

    public function ver(){
    	return view('tecnico_academico/tecnico_academico_view');
    }

    public function update_show(){
    	return view('tecnico_academico/tecnico_academico_update_view');
    }

    public function delete_show(){
    	return view('tecnico_academico/tecnico_academico_delete');
    }

    // ---------------------------------------------------------------------------------------

    public function guardar(Request $request){

    	// Cargar el archivo en la carpeta public
    	$document = $request->file('curriculo');
    	$document->move(public_path('/curriculos'), $document->getClientOriginalName());
    }
}
