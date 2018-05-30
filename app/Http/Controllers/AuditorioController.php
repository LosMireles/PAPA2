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
        return view('infraestructura.auditorios.create')
            ->with([
                'url_previous' => url()->previous()
            ]);
    }

    //----------------------------------------------------------------
    public function store(Request $request){
      #$request->validate($this->rules());

        $auditorio = new Auditorio;
        $auditorio->nombre               = $request->nombre;
        $auditorio->Capacidad          = $request->Capacidad;

      	$auditorio->save();

        $audAux -> Auditorio::where('nombre', $request->nombre)->first();
        $id = $audAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/auditorios/' . $id, $foto->getClientOriginalName());
          }
        }

	    echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento agregado exitosamente');
    }

    //----------------------------------------------------------------
    public function edit($nombre) {
      $auditorio  = Auditorio::where('nombre', $nombre)->first();

      return view('infraestructura.auditorios.edit')
          ->with([
              'auditorio'   => $auditorio,
              'url_previous'=> url()->previous()
          ]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $nombre) {
      $audAux = Auditorio::where('nombre', $nombre)->first();
      $id = $audAux->id;

      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/auditorios/' . $id, $foto->getClientOriginalName());
        }
      }

        $request->validate($this->rules($nombre));

        $nombre_nuevo	= $request->nombre;
        $Capacidad		= $request->Capacidad;


        Auditorio::where('nombre', $nombre)->update([
            'nombre'               => $nombre_nuevo,
            'Capacidad'          => $Capacidad
        ]);

		echo "Elemento editado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
    }

    //----------------------------------------------------------------
    public function destroy($nombre){
      $auditorio = Auditorio::where('nombre', $nombre)->first();
      Storage::deleteDirectory('infraestructura/auditorios/'. $auditorio->id . '/');
        if(!$auditorio){
            $mensaje = "No existe auditorio con nombre: ".$nombre;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $auditorio->delete();

	      echo "Elemento borrado exitosamente!";
          return redirect()->back()
              ->with('status', 'Elemento borrado exitosamente');
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
      $auditorio = Auditorio::where('nombre', $nombre)->first();
      $id = $auditorio->id;
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/auditorios/' . $id.'/', $foto->getClientOriginalName());
        }
      }
      return redirect('/auditorios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
    }

    public function borrarImg($nombre, $imagen)
    {
      $auditorio = Auditorio::where('nombre', $nombre)->first();
      $id = $auditorio->id;
      $dirImagen = 'infraestructura/auditorios/' . $id . '/' . $imagen;
      Storage::delete($dirImagen);
      return redirect('/auditorios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
    }
}
