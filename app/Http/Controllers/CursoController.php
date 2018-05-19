<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Curso;
use App\Espacio;

class CursoController extends Controller {
    public function index(){
        $cursos  = Curso::all();
        return view('infraestructura.cursos.index')
            ->with(['cursos' => $cursos]);
    }

    //----------------------------------------------------------------
	public function create(){
        $espacios = Espacio::all();
        return view('infraestructura.cursos.create')
            ->with(['espacios' => $espacios]);
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $curso                = new Curso;

        $curso->nombre        = $request->nombre;
        $curso->periodo       = $request->periodo;
		$curso->grupo         = $request->grupo;
        $curso->noEstudiantes = $request->noEstudiantes;
        $curso->tipoAula      = $request->tipoAula;
        $curso->tipo          = $request->tipo;
        $espacios             = $request->espacios;

        $curso->save();

        if(!empty($espacios)){
            foreach($espacios as $tipoEspacio){
                $espacioId = DB::table('espacios')->where('tipo', $tipoEspacio)->value('id');
                $curso->espacios()->attach($espacioId);
            }
        }

		echo "Elemento insertado exitosamente!";
        return redirect()->action('CursoController@index');
    }

	//-----------------------------------------------------------
	public function edit($nombre) {
		$curso         = Curso::where('nombre', $nombre)->first();
	  	$espacios      = Espacio::all();
        $curso_espacio = DB::table('curso_espacio')->get();

	  	return view('infraestructura.cursos.edit')
	  	    ->with(['curso'         => $curso,
                    'espacios'      => $espacios,
                    'curso_espacio' => $curso_espacio]);
	}

	//-----------------------------------------------------------
    public function update(Request $request, $nombre) {
	  	$nombre_nuevo  = $request->nombre;
	  	$periodo       = $request->periodo;
	  	$grupo         = $request->grupo;
	  	$noEstudiantes = $request->noEstudiantes;
	  	$tipoAula      = $request->tipoAula;
	  	$tipo          = $request->tipo;
        $tipoEspacios  = $request->espacios;

        $idEspacios = [];
        foreach($tipoEspacios as $tipoEspacio){
            $idEspacios[] = DB::table('espacios')
                ->where('tipo', $tipoEspacio)->value('id');
        }

        $curso = Curso::where('nombre', $nombre)->first();
		$curso->update([
            'nombre'        => $nombre_nuevo,
            'periodo'       => $periodo,
            'grupo'         => $grupo,
            'noEstudiantes' => $noEstudiantes,
            'tipoAula'      => $tipoAula,
            'tipo'          => $tipo
        ]);

        $curso->espacios()->sync($idEspacios);

		echo "Elemento editado exitosamente!";
        return redirect()->action('CursoController@index');
	}

	//-----------------------------------------------------------
    public function destroy($nombre){
        $curso = Curso::where('nombre', $nombre)->first();
        if(!$curso){
            $mensaje = "No existe curso con nombre: ".$nombre;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $curso->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('CursoController@index');
	}

	//*-----------------------------------------------------------------
}

