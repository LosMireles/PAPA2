<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Curso;

class CursoController extends Controller {
      public function indexVer(){
      $cursos  = Curso::all();
      return view('infraestructura/curso/curso_view',['cursos'=>$cursos]);
   }
//----------------------------------------------------------------
	public function insertform(){
	  return view('infraestructura/curso/curso_create');
	}

	/**
     * Create a new curso instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $curso = new Curso;

        $curso->nombre = $request->nombre;
        $curso->periodo = $request->periodo;
		    $curso->grupo = $request->grupo;
        $curso->noEstudiantes = $request->noEstudiantes;
		    $curso->tipoAula = $request->tipoAula;
		    $curso->tipo = $request->tipo;

        $curso->save();
		    echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarCurso">Click Here</a> to go back.';
    }
	//-----------------------------------------------------------

	public function indexBorrar(){
		$cursos  = Curso::all();
      	return view('infraestructura/curso/curso_delete',['cursos'=>$cursos]);
	}
	public function destroy(Request $request){
	  	$nombre = $request->input('nombre');
	  	DB::delete('delete from cursos where nombre = ?',[$nombre]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/borrarCurso">Click Here</a> to go back.';
	}

	//*-----------------------------------------------------------------
	public function index(){
	  	$cursos  = Curso::all();
	  	return view('infraestructura/curso/curso_edit_view',['cursos'=>$cursos]);
	}
	public function show($id) {
		$cursos  = Curso::where('nombre', $id)->first();
	  	return view('infraestructura/curso/curso_update',['cursos'=>$cursos]);
	}
	public function edit(Request $request, $id) {
	  	$nombre = $request->input('nombre');
	  	$periodo = $request->input('periodo');
	  	$grupo = $request->input('grupo');
	  	$noEstudiantes = $request->input('noEstudiantes');
	  	$tipoAula = $request->input('tipoAula');
	  	$tipo = $request->input('tipo');

		Curso::where('nombre', $id)->update([
            'nombre' => $nombre, 'periodo' => $periodo,'grupo'=>$grupo,
            'noEstudiantes'=>$noEstudiantes, 'tipoAula' => $tipoAula, 'tipo' => $tipo
        ]);
	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarCurso">Click Here</a> to go back.';
	}
}
