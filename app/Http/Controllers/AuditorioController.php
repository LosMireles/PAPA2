<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Auditorio;

class AuditorioController extends Controller
{
    public function index(){
      $auditorios = Auditorio::all();

      return view('infraestructura.auditorios.index')
          ->with(['auditorios' => $auditorios]);
     }

    //----------------------------------------------------------------
    public function create(){
        return view('infraestructura.auditorios.create');
    }

    //----------------------------------------------------------------
    public function store(Request $request){
/*
      $request->validate($this->rules());
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/auditorios/' . $request->Tipo, $foto->getClientOriginalName());
        }
      }
*/


        $auditorio = new Auditorio;
        $auditorio->nombre               = $request->nombre;
        $auditorio->Capacidad          = $request->Capacidad;

      	$auditorio->save();

	    echo "Elemento insertado exitosamente!";
      return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function edit($nombre) {
      $auditorio  = Auditorio::where('nombre', $nombre)->first();

      return view('infraestructura.auditorios.edit')
          ->with(['auditorio'=>$auditorio]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $nombre) {
/*
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/auditorios/' . $request->Tipo, $foto->getClientOriginalName());
        }
      }
*/
        $request->validate($this->rules($nombre));

        $nombre_nuevo	= $request->nombre;
        $Capacidad		= $request->Capacidad;


        Auditorio::where('nombre', $nombre)->update([
            'nombre'               => $nombre_nuevo,
            'Capacidad'          => $Capacidad
        ]);

		echo "Elemento editado exitosamente!";
        return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function destroy($nombre){
      Storage::deleteDirectory('infraestructura/auditorios/'. $nombre . '/');
        $auditorio = auditorio::where('nombre', $nombre)->first();
        if(!$auditorio){
            $mensaje = "No existe auditorio con nombre: ".$nombre;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $auditorio->delete();

	      echo "Elemento borrado exitosamente!";
        return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function rules($nombre = null){
        return [
            'nombre'               => ['required',
                                     Rule::unique('auditorios')->ignore($nombre, 'nombre')],
            'Capacidad'          => 'required|integer'

        ];
    }

    public function viewImg($nombre){
      return view('infraestructura.auditorios.viewImg')->with(['nombre' => $nombre]);
    }

    public function guardarImg(Request $request, $nombre){
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/auditorios/' . $nombre, $foto->getClientOriginalName());
        }
      }
      return redirect('/auditorios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
    }

    public function borrarImg($nombre, $imagen)
    {
      $dirImagen = 'infraestructura/auditorios/' . $nombre . '/' . $imagen;
      Storage::delete($dirImagen);
      return redirect('/auditorios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
    }
}
