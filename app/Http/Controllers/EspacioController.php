<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Espacio;
use App\Curso;

class EspacioController extends Controller {
        public function indexVer(){
        $espacios = Espacio::all();
        $cursos   = Curso::all();

        return view('infraestructura/espacio/espacio_view',
            ['espacios' => $espacios,
             'cursos'   => $cursos]);
    }
//----------------------------------------------------------------
    public function insertform(){
        $cursos   = Curso::all();

        return view('infraestructura/espacio/espacio_create',
            ['cursos' => $cursos]);
	}

	/**
     * Create a new espacio instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $espacio             = new Espacio;

        $espacio->tipo       = $request->tipo;
		$espacio->superficie = $request->superficie;
		$espacio->cantidad   = $request->cantidad;
		$espacio->clase      = $request->clase;

        $espacio->save();

        foreach($request->cursos as $nombreCurso){
            $cursoId = DB::table('cursos')->where('nombre', $nombreCurso)->value('id');
            $curso->espacios()->attach($cursoId);
        }

		$clase =$request->input('clase');

		if($clase == 'Aula')
		{
			header("Location: http://127.0.0.1:8000/insertarAula?tipo=".urlencode($request->input('tipo')));
			die();
		}
		if($clase == 'Cubiculo')
		{
			header("Location: http://127.0.0.1:8000/insertarCubiculo?tipo=".urlencode($request->input('tipo')));
			die();
		}
		if($clase == 'Sanitario')
		{
			header("Location: http://127.0.0.1:8000/insertarSanitario?tipo=".urlencode($request->input('tipo')));
			die();
		}
		if($clase == 'Asesoria')
		{
			header("Location: http://127.0.0.1:8000/insertarAsesoria?tipo=".urlencode($request->input('tipo')));
			die();
		}
		if($clase == 'Auditorio')
		{
			header("Location: http://127.0.0.1:8000/insertarAuditorio?tipo=".urlencode($request->input('tipo')));
			die();
		}

		echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarEspacio">Click Here</a> to go back.';
    }
	//-----------------------------------------------------------

	public function indexBorrar(){
		$espacios  = Espacio::all();
      	return view('infraestructura/espacio/espacio_delete',['espacios'=>$espacios]);
	}
	public function destroy(Request $request){
	  	$tipo = $request->input('tipo');
	  	DB::delete('delete from espacios where tipo = ?',[$tipo]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/borrarEspacio">Click Here</a> to go back.';
	}

	//*-----------------------------------------------------------------
	public function index(){
	  	$espacios  = Espacio::all();
	  	return view('infraestructura/espacio/espacio_edit_view',['espacios'=>$espacios]);
	}

	public function show($tipo) {
		$espacio       = Espacio::where('tipo', $tipo)->first();
        $cursos        = Curso::all();
        $curso_espacio = DB::table('curso_espacio')->get();

        return view('infraestructura/espacio/espacio_update',
            ['espacio'       => $espacio,
             'cursos'        => $cursos,
             'curso_espacio' => $curso_espacio]);
	}

	public function edit(Request $request) {
        $tipo         = $request->tipo;
		$superficie   = $request->superficie;
		$cantidad     = $request->cantidad;
		$clase        = $request->clase;
        $nombreCursos = $request->cursos;

        $idCursos = [];
        foreach($nombreCursos as $nombreCurso){
            $idCursos[] = DB::table('cursos')
                ->where('nombre', $nombreCurso)->value('id');
        }

        $espacio =Espacio::where('id', $request->id)->first();
		$espacio->update([
            'tipo' => $tipo, 'superficie' => $superficie,'cantidad'=>$cantidad,
            'clase' => $clase,
        ]);

        $espacio->cursos()->sync($idCursos);

	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarEspacio">Click Here</a> to go back.';
	}
}

