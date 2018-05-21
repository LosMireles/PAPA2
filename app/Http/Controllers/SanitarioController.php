<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
          if ($request->file('Fotografias')->isValid()) {
            $request->Fotografias->storeAs('infraestructura/sanitarios/' . $request->Tipo,
                                            $request->Fotografias->getClientOriginalName());
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
        $request->validate($this->rules());

        if ($request->hasFile('Fotografias')) {
          if ($request->file('Fotografias')->isValid()) {
            $request->Fotografias->storeAs('infraestructura/sanitarios/' . $request->Tipo,
                                            $request->Fotografias->getClientOriginalName());
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
	public function rules(){
        return [
            'Tipo'             => 'required|unique:sanitarios|alpha_dash',
            'InicioDia'        => 'required|date',
            'FinDia'           => 'required|date',
            'Limpieza'         => 'required|integer|min:1|max:5',
            'CantidadPersonal' => 'required|integer'
        ];
    }

  public function viewImg($tipo){
    return view('infraestructura.sanitarios.viewImg')->with(['tipo' => $tipo]);
  }
}
