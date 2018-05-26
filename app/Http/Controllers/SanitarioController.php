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
            $foto->storeAs('infraestructura/sanitarios/' . $request->Tipo, $foto->getClientOriginalName());
          }
        }

        $sanitario = new Sanitario;

        $sanitario->Tipo             = $request->Tipo;
    	$sanitario->InicioHora       = $request->InicioHora;
    	$sanitario->FinHora          = $request->FinHora;
    	$sanitario->InicioDia        = $request->InicioDia;
        $sanitario->FinDia           = $request->FinDia;
        $sanitario->Limpieza         = $request->Limpieza;
        $sanitario->CantidadPersonal = $request->CantidadPersonal;
        $sanitario->espacio_id       = $request->espacio_id;

        $sanitario->save();

		echo "Elemento insertado exitosamente!";
        return redirect()->action('SanitarioController@index');
    }


	//-----------------------------------------------------------
	public function edit($tipo) {
		$sanitario  = Sanitario::where('Tipo', $tipo)->first();

    return view('infraestructura.sanitarios.edit')
        ->with(['sanitario'=>$sanitario]);
	}

	//--------------------------------------------------------------
	public function update(Request $request, $tipo) {
        $request->validate($this->rules($tipo));

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/sanitarios/' . $request->Tipo, $foto->getClientOriginalName());
          }
        }

	    $tipo_nuevo       = $request->Tipo;
	    $InicioHora       = $request->InicioHora;
	    $FinHora          = $request->FinHora;
		$InicioDia        = $request->InicioDia;
		$FinDia           = $request->FinDia;
        $Limpieza         = $request->Limpieza;
        $CantidadPersonal = $request->CantidadPersonal;
        $espacio_id       = $request->espacio_id;

	    Sanitario::where('Tipo', $tipo)->update(['Tipo'        => $tipo_nuevo,
											'InicioHora'       => $InicioHora,
											'FinHora'          => $FinHora,
											'InicioDia'        => $InicioDia,
											'FinDia'           => $FinDia,
											'Limpieza'         => $Limpieza,
                                            'CantidadPersonal' => $CantidadPersonal,
                                            'espacio_id'       => $espacio_id]);

		echo "Elemento editado exitosamente!";
    return redirect()->action('SanitarioController@index');
	}

	//--------------------------------------------------------------
	public function destroy($tipo){
    Storage::deleteDirectory('infraestructura/sanitarios/'. $tipo . '/');
    $sanitario = Sanitario::where('Tipo', $tipo)->first();
    if(!$sanitario){
        $mensaje = "No existe sanitario con tipo: ".$tipo;
        return view('general.error')
            ->with(['mensaje' => $mensaje]);
    }
    $sanitario->delete();

		echo "Elemento borrado exitosamente!";
    return redirect()->action('SanitarioController@index');
	}

	//--------------------------------------------------------------
	public function rules($tipo = null){
        return [
            'Tipo'             => ['required',
                                   Rule::unique('sanitarios')->ignore($tipo, 'Tipo')],
            'InicioDia'        => 'required|date',
            'FinDia'           => 'required|date',
            'Limpieza'         => 'required|integer|min:1|max:5',
            'CantidadPersonal' => 'required|integer'
        ];
    }

  public function viewImg($tipo){
    return view('infraestructura.sanitarios.viewImg')->with(['tipo' => $tipo]);
  }

  public function guardarImg(Request $request, $tipo){
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/sanitarios/' . $tipo, $foto->getClientOriginalName());
      }
    }
    return redirect('/sanitarios/'. $tipo .'/viewImg')->with(['tipo' => $tipo]);
  }

  public function borrarImg($tipo, $imagen)
  {
    $dirImagen = 'infraestructura/sanitarios/' . $tipo . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/sanitarios/'. $tipo .'/viewImg')->with(['tipo' => $tipo]);
  }
}
