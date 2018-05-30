<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Sanitario;

class SanitarioController extends Controller
{
  public function index(){
    $sanitarios  = Sanitario::all();

    return view('infraestructura.sanitarios.index')
        ->with(['sanitarios'=>$sanitarios]);
  }

    //--------------------------------------------------------
	public function create($url_regreso = null){
	  return view('infraestructura.sanitarios.create')
        ->with([
            'url_previous' => url()->previous(),
            'url_regreso' => $url_regreso
        ]);
	}

    //--------------------------------------------------------
    public function store(Request $request, $url_regreso = null)
    {
        $request->validate($this->rules());

        $sanitario = new Sanitario;

        $sanitario->nombre             = $request->nombre;
    	$sanitario->sexo       = $request->sexo;

        $sanitario->save();

        $sanAux = Sanitario::where('nombre', $request->nombre)->first();
        $id = $sanAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/sanitarios/' . $id, $foto->getClientOriginalName());
          }
        }

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento agregado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento agregado exitosamente');
        }

    }


	//-----------------------------------------------------------
	public function edit($nombre, $url_regreso = null) {
		$sanitario  = Sanitario::where('nombre', $nombre)->first();

    return view('infraestructura.sanitarios.edit')
        ->with([
            'sanitario'     => $sanitario,
            'url_previous'  => url()->previous(),
            'url_regreso'   => $url_regreso
        ]);
	}

	//--------------------------------------------------------------
	public function update(Request $request, $nombre, $url_regreso = null) {
        $request->validate($this->rules($nombre));

        $sanAux = Sanitario::where('nombre', $nombre)->first();
        $id = $sanAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/sanitarios/' . $id, $foto->getClientOriginalName());
          }
        }

	    $nombre_nuevo       = $request->nombre;
	    $sexo       = $request->sexo;


	    Sanitario::where('nombre', $nombre)->update(['nombre'        => $nombre_nuevo,
											'sexo'       => $sexo]);

		echo "Elemento editado exitosamente!";

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
    }

	//--------------------------------------------------------------
	public function destroy($nombre, $url_regreso = null){
    $sanAux = Sanitario::where('nombre', $nombre)->first();
    $id = $sanAux->id;
    Storage::deleteDirectory('infraestructura/sanitarios/'. $id . '/');
    $sanitario = Sanitario::where('nombre', $nombre)->first();
    if(!$sanitario){
        $mensaje = "No existe sanitario con nombre: ".$nombre;
        return view('general.error')
            ->with(['mensaje' => $mensaje]);
    }
    $sanitario->delete();

		echo "Elemento borrado exitosamente!";

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento borrado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento borrado exitosamente');
        }
    }

	//--------------------------------------------------------------
	public function rules($nombre = null){
        return [
            'nombre'             => ['required',
                                   Rule::unique('sanitarios')->ignore($nombre, 'nombre')],
            'sexo'        => 'required|alpha',
        ];
    }

  public function viewImg($nombre){
    return view('infraestructura.sanitarios.viewImg')->with(['nombre' => $nombre]);
  }

  public function guardarImg(Request $request, $nombre){
    $sanAux = Sanitario::where('nombre', $nombre)->first();
    $id = $sanAux->id;
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/sanitarios/' . $id, $foto->getClientOriginalName());
      }
    }

    return redirect('/sanitarios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

  public function borrarImg($nombre, $imagen)
  {
    $sanAux = Sanitario::where('nombre', $nombre)->first();
    $id = $sanAux->id;
    $dirImagen = 'infraestructura/sanitarios/' . $id . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/sanitarios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }
}
