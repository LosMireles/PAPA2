<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cubiculo;

class CubiculoController extends Controller {

  public function index(){
    $cubiculos  = Cubiculo::all();

    return view('infraestructura.cubiculos.index')
        ->with(['cubiculos'=>$cubiculos]);
   }

    //----------------------------------------------------------------
	public function create(){
	  return view('infraestructura.cubiculos.create');
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate($this->rules());

        if ($request->hasFile('Fotografias')) {
          if ($request->file('Fotografias')->isValid()) {
            $request->Fotografias->storeAs('infraestructura/cubiculos/' . $request->Tipo,
                                            $request->Fotografias->getClientOriginalName());
          }
        }

        $cubiculo = new Cubiculo;

    $cubiculo->Tipo           = $request->Tipo;
		$cubiculo->Profesor       = $request->Profesor;
		$cubiculo->CantidadEquipo = $request->CantidadEquipo;
        $cubiculo->espacio_id       = $request->espacio_id;

    $cubiculo->save();

    echo "Elemento insertado exitosamente!";
    return redirect()->action('CubiculoController@index');
  }

    //----------------------------------------------------------------
	public function edit($tipo) {
		$cubiculo  = Cubiculo::where('Tipo', $tipo)->first();

    return view('infraestructura.cubiculos.edit')
        ->with(['cubiculo'=>$cubiculo]);
	}

    //----------------------------------------------------------------
	public function update(Request $request, $tipo) {
        $request->validate($this->rules());
        if ($request->hasFile('Fotografias')) {
          if ($request->file('Fotografias')->isValid()) {
            $request->Fotografias->storeAs('infraestructura/cubiculos/' . $request->Tipo,
                                            $request->Fotografias->getClientOriginalName());
          }
        }

	  	$tipo_nuevo     = $request->Tipo;
		$Profesor       = $request->Profesor;
		$CantidadEquipo = $request->CantidadEquipo;
        $espacio_id     = $request->espacio_id;

        Cubiculo::where('Tipo', $tipo)->update(
            ['Tipo'           => $tipo_nuevo,
             'Profesor'       => $Profesor,
             'CantidadEquipo' => $CantidadEquipo,
             'espacio_id'     => $espacio_id]);

		echo "Elemento insertado exitosamente!";
    return redirect()->action('CubiculoController@index');
	}

    //----------------------------------------------------------------
	public function destroy(Request $request, $tipo){
    Storage::deleteDirectory('infraestructura/cubiculos/'. $tipo . '/');
    $cubiculo = Cubiculo::where('Tipo', $tipo)->first();
    if(!$cubiculo){
        $mensaje = "No existe cubiculo con tipo: ".$tipo;
        return view('general.error')
            ->with(['mensaje' => $mensaje]);
    }
    $cubiculo->delete();

		echo "Elemento borrado exitosamente!";
    return redirect()->action('CubiculoController@index');
	}

    //----------------------------------------------------------------
    public function rules(){
        return [
            'Tipo'           => 'required|unique:cubiculos|alpha_dash',
            'Profesor'       => 'required|alpha',
            'CantidadEquipo' => 'required|integer'
        ];
    }

	//*********************************************************************
	public function imprimir() {
	  	$cubiculos  = Cubiculo::all();

        $pdf = PDF::loadView('infraestructura.cubiculos.index')
           ->with(['cubiculos'=>$cubiculos]);
	  	return $pdf->download('Cubiculos.pdf');
	}

  //----------------------------------------------------------------
  public function viewImg($tipo){
    return view('infraestructura.cubiculos.viewImg')->with(['tipo' => $tipo]);
  }

}
