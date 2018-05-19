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
	public function dummie(){
		header("Location: http://127.0.0.1:8000/insertarCubiculo?tipo=".urlencode(""));
	  	die();
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $cubiculo = new Cubiculo;

        $cubiculo->Tipo           = $request->Tipo;
		$cubiculo->Profesor       = $request->Profesor;
		$cubiculo->CantidadEquipo = $request->CantidadEquipo;

        $cubiculo->save();

		echo "Elemento insertado exitosamente!";
        return redirect()->action('CubiculoController@index');
    }

    //----------------------------------------------------------------
	public function edit($id) {
		$cubiculos  = Cubiculo::where('IdCubiculo', $id)->first();

        return view('infraestructura.cubiculos.edit')
            ->with(['cubiculos'=>$cubiculos]);
	}

    //----------------------------------------------------------------
	public function update(Request $request, $id) {
	  	$Tipo           = $request->Tipo;
		$Profesor       = $request->Profesor;
		$CantidadEquipo = $request->CantidadEquipo;

        Cubiculo::where('IdCubiculo', $id)->update(
            ['Tipo'           => $Tipo,
             'Profesor'       => $Profesor,
             'CantidadEquipo' => $CantidadEquipo]);

		echo "Elemento insertado exitosamente!";
        return redirect()->action('CubiculoController@index');
	}

    //----------------------------------------------------------------
	public function destroy(Request $request, $tipo){
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

	//*********************************************************************
	public function imprimir() {
	  	$cubiculos  = Cubiculo::all();

        $pdf = PDF::loadView('infraestructura.cubiculos.index')
           ->with(['cubiculos'=>$cubiculos]);
	  	return $pdf->download('Cubiculos.pdf');
	}

}

