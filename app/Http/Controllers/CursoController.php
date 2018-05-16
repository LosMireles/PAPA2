<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Curso;
use App\Espacio;

class CursoController extends Controller {
      public function indexVer(){
      $cursos  = Curso::all();
      return view('infraestructura/curso/curso_view',
          ['cursos'=>$cursos]);
   }
//----------------------------------------------------------------
	public function insertform(){
        $espacios = Espacio::all();
        return view('infraestructura/curso/curso_create',
            ['espacios' => $espacios]);
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

        $curso                = new Curso;

        $curso->nombre        = $request->nombre;
        $curso->periodo       = $request->periodo;
		$curso->grupo         = $request->grupo;
        $curso->noEstudiantes = $request->noEstudiantes;
        $curso->tipoAula      = $request->tipoAula;
        $curso->tipo          = $request->tipo;

        $curso->save();

        foreach($request->espacios as $tipoEspacio){
            $espacioId = DB::table('espacios')->where('tipo', $tipoEspacio)->value('id');
            $curso->espacios()->attach($espacioId);
        }

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
	public function indexEditar(){
	  	$cursos  = Curso::all();
	  	return view('infraestructura/curso/curso_edit_view',['cursos'=>$cursos]);
	}
	public function show($nombre) {
		$curso         = Curso::where('nombre', $nombre)->first();
        $espacios      = Espacio::all();
        $curso_espacio = DB::table('curso_espacio')->get();

        return view('infraestructura/curso/curso_update',
            ['curso'         => $curso,
             'espacios'      => $espacios,
             'curso_espacio' => $curso_espacio]);
	}
	public function edit(Request $request) {
	  	$nombre        = $request->input('nombre');
	  	$periodo       = $request->input('periodo');
	  	$grupo         = $request->input('grupo');
	  	$noEstudiantes = $request->input('noEstudiantes');
	  	$tipoAula      = $request->input('tipoAula');
	  	$tipo          = $request->input('tipo');
        $tipoEspacios  = $request->input('espacios');

        $idEspacios = [];
        foreach($tipoEspacios as $tipoEspacio){
            $idEspacios[] = DB::table('espacios')
                ->where('tipo', $tipoEspacio)->value('id');
        }

        $curso = Curso::where('id', $request->id)->first();
		$curso->update([
            'nombre' => $nombre, 'periodo' => $periodo,'grupo'=>$grupo,
            'noEstudiantes'=>$noEstudiantes, 'tipoAula' => $tipoAula, 'tipo' => $tipo
        ]);

        $curso->espacios()->sync($idEspacios);

	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarCurso">Click Here</a> to go back.';
	}
}
