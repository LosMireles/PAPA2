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
	public function create(){
	  return view('infraestructura.sanitarios.create');
	}

    //--------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate($this->rules());
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/sanitarios/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

        $sanitario = new Sanitario;

        $sanitario->nombre	= $request->nombre;
    	$sanitario->sexo       	= $request->sexo;


        $sanitario->save();

		echo "Elemento insertado exitosamente!";
        return redirect()->action('SanitarioController@index');
    }


	//-----------------------------------------------------------
	public function edit($nombre) {
		$sanitario  = Sanitario::where('nombre', $nombre)->first();

    return view('infraestructura.sanitarios.edit')
        ->with(['sanitario'=>$sanitario]);
	}

	//--------------------------------------------------------------
	public function update(Request $request, $nombre) {
        $request->validate($this->rules($nombre));

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/sanitarios/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

	    $nombre_nuevo	= $request->nombre;
	    $sexo       	= $request->sexo;

	    Sanitario::where('nombre', $nombre)->update(['nombre'   => $nombre_nuevo,
													'sexo'       => $sexo]);

		echo "Elemento editado exitosamente!";
    return redirect()->action('SanitarioController@index');
	}

	//--------------------------------------------------------------
	public function destroy($nombre){
    Storage::deleteDirectory('infraestructura/sanitarios/'. $nombre . '/');
    $sanitario = Sanitario::where('nombre', $nombre)->first();
    if(!$sanitario){
        $mensaje = "No existe sanitario con nombre: ".$nombre;
        return view('general.error')
            ->with(['mensaje' => $mensaje]);
    }
    $sanitario->delete();

		echo "Elemento borrado exitosamente!";
    return redirect()->action('SanitarioController@index');
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
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/sanitarios/' . $nombre, $foto->getClientOriginalName());
      }
    }
    return redirect('/sanitarios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

  public function borrarImg($nombre, $imagen)
  {
    $dirImagen = 'infraestructura/sanitarios/' . $nombre . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/sanitarios/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }
}
