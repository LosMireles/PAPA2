<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Asignatura;
use App\Curso;
use App\Software;

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
        $cursos    = Curso::all();
        $softwares = software::all();

        return view('asignaturas.create')
            ->with(['cursos'    => $cursos,
                    'softwares' => $softwares]);
    }

    //----------------------------------------------------------------
    public function store(Request $request){
        $request->validate($this->rules());

        $asignatura = new Asignatura;

        $asignatura->nombre      = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->curso_id    = $request->curso_id;
        $softwares               = $request->software;

        $asignatura->save();

        if(!empty($softwares)){
            foreach($softwares as $nombre){
                $softwareId = DB::table('softwares')->where('nombre', $nombre)->value('id');
                $asignatura->softwares()->attach($softwareId);
            }
        }

		echo "Elemento insertado exitosamente!";
        return redirect()->action('AsignaturaController@index');
    }

    //----------------------------------------------------------------
    public function edit($nombre){
        $asignatura            = Asignatura::where('nombre', $nombre)->first();
        $asignaturas_softwares = DB::table('asignatura_software')->get();
        $cursos                = Curso::all();
        $softwares             = Software::all();
        return view('asignaturas.edit')
            ->with(['asignatura'            => $asignatura,
                    'cursos'                => $cursos,
                    'softwares'             => $softwares,
                    'asignaturas_softwares' => $asignaturas_softwares]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $nombre){
        $request->validate($this->rules($nombre));

        $nombre_nuevo    = $request->nombre;
        $descripcion     = $request->descripcion;
        $curso_id        = $request->curso_id;
        $nombreSoftwares = $request->softwares;

        $asignatura = Asignatura::where('nombre', $nombre)->first();
        $asignatura->update([
            'nombre'      => $nombre_nuevo,
            'descripcion' => $descripcion,
            'curso_id'    => $curso_id
        ]);

        if(!empty($nombreSoftwares)){
            $idSoftwares = [];
            foreach($nombreSoftwares as $nombreSoftware){
                $idSoftwares[] = Software::where('nombre', $nombreSoftware)->value('id');
            }

            $asignatura->softwares()->sync($idSoftwares);
        }

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

    //Valida los datos de los formularios create y edit
    public function rules($nombre = null){
        return [
            'nombre'      => ['required',
                              Rule::unique('asignaturas')->ignore($nombre, 'nombre')]
            ];
    }
}

