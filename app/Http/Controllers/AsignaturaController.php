<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Asignatura;
use App\Curso;

class AsignaturaController extends Controller
{
    public function index(){
        $asignaturas = Asignatura::with('curso')->get();
        $cursos      = Curso::all();
        return view('asignaturas.index')
            ->with(['asignaturas' => $asignaturas,
                    'cursos'      => $cursos]);
    }

    //----------------------------------------------------------------
    public function create(){
        $cursos = Curso::all();
        return view('asignaturas.create')
            ->with(['cursos' => $cursos]);
    }

    //----------------------------------------------------------------
     public function store(Request $request){
        $asignatura = new Asignatura;

        $asignatura->nombre      = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->curso_id    = $request->curso_id;

        $asignatura->save();

		echo "Elemento insertado exitosamente!";
        return redirect()->action('AsignaturaController@index');
    }

    //----------------------------------------------------------------
    public function edit($nombre){
        $asignatura = Asignatura::where('nombre', $nombre)->first();
        $cursos     = Curso::all();
        return view('asignaturas.edit')
            ->with(['asignatura' => $asignatura,
                    'cursos'     => $cursos]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $nombre){
        $nombre_nuevo = $request->nombre;
        $descripcion  = $request->descripcion;
        $curso_id     = $request->curso_id;

        $asignatura = Asignatura::where('nombre', $nombre)->first();
        $asignatura->update([
            'nombre'      => $nombre_nuevo,
            'descripcion' => $descripcion,
            'curso_id'    => $curso_id
        ]);

		echo "Elemento editado exitosamente!";
        return redirect()->action('AsignaturaController@index');
    }

    //----------------------------------------------------------------
    public function destroy($nombre){
        $asignatura = Asignatura::where('nombre', $nombre)->first();
        if(!$asignatura){
            $mensaje = "No existe asignatura con nombre: ".$nombre;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $asignatura->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('AsignaturaController@index');
    }
}

