<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Espacio;
use App\Curso;

class EspacioController extends Controller {
        public function index(){
        $espacios = Espacio::all();

        return view('infraestructura.espacios.index')
            ->with(['espacios' => $espacios]);
    }
    //----------------------------------------------------------------

    public function create(){
        $espacios   = Espacio::all();
        $cursos     = Curso::all();

        return view('infraestructura.espacios.create')
            ->with(['espacios' => $espacios,
                    'cursos'   => $cursos]);
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $espacio             = new Espacio;

        $espacio->tipo       = $request->tipo;
		$espacio->superficie = $request->superficie;
		$espacio->cantidad   = $request->cantidad;
		$espacio->clase      = $request->clase;

        $espacio->save();

        foreach($request->cursos as $nombreCurso){
            $cursoId = DB::table('cursos')->where('nombre', $nombreCurso)->value('id');
            $espacio->cursos()->attach($cursoId);
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

		echo "Elemento insertado exitosamente!";
        return redirect()->action('EspacioController@index');
    }

    //----------------------------------------------------------------
	public function edit($tipo) {
		$espacio       = Espacio::where('tipo', $tipo)->first();
        $cursos        = Curso::all();
        $curso_espacio = DB::table('curso_espacio')->get();

        return view('infraestructura.espacios.edit')
            ->with(['espacio'       => $espacio,
                    'cursos'        => $cursos,
                    'curso_espacio' => $curso_espacio]);
	}

    //----------------------------------------------------------------
	public function update(Request $request, $tipo) {
        $tipo_nuevo   = $request->tipo;
		$superficie   = $request->superficie;
		$cantidad     = $request->cantidad;
		$clase        = $request->clase;
        $nombreCursos = $request->cursos;

        $idCursos = [];
        foreach($nombreCursos as $nombreCurso){
            $idCursos[] = DB::table('cursos')
                ->where('nombre', $nombreCurso)->value('id');
        }

        $espacio =Espacio::where('tipo', $tipo)->first();
		$espacio->update([
            'tipo'       => $tipo_nuevo,
            'superficie' => $superficie,
            'cantidad'   => $cantidad,
            'clase'      => $clase
        ]);

        $espacio->cursos()->sync($idCursos);

		echo "Elemento editado exitosamente!";
        return redirect()->action('EspacioController@index');
	}

    //----------------------------------------------------------------
	public function destroy($tipo){
        $espacio = Espacio::where('tipo', $tipo)->first();
        if(!$espacio){
            $mensaje = "No existe espacio con Tipo: ".$tipo;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $espacio->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('EspacioController@index');
	}

	//*-----------------------------------------------------------------

}

