<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculos/' . $request->Tipo, $foto->getClientOriginalName());
          }
        }

        $cubiculo = new Cubiculo;

        $cubiculo->Tipo           = $request->Tipo;
        $cubiculo->superficie     = $request->superficie;
		$cubiculo->Profesor       = $request->Profesor;
		$cubiculo->CantidadEquipo = $request->CantidadEquipo;

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
        $request->validate($this->rules($tipo));
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculos/' . $request->Tipo, $foto->getClientOriginalName());
          }
        }

	  	$tipo_nuevo     = $request->Tipo;
        $superficie     = $request->superficie;
		$Profesor       = $request->Profesor;
		$CantidadEquipo = $request->CantidadEquipo;

        Cubiculo::where('Tipo', $tipo)->update(
            ['Tipo'           => $tipo_nuevo,
             'superficie'     => $superficie,
             'Profesor'       => $Profesor,
             'CantidadEquipo' => $CantidadEquipo]);

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
    public function rules($tipo = null){
        return [
            'Tipo'           => ['required',
                                Rule::unique('cubiculos')->ignore($tipo, 'Tipo')],
            'Profesor'       => 'required|alpha',
            'CantidadEquipo' => 'required|integer'
        ];
    }

	//*********************************************************************
	public function imprimir() {
	  	$cubiculos  = Cubiculo::all();
	//dd($cubiculos);

        $pdf = PDF::loadView('infraestructura.cubiculos.index2',array('cubiculos'=>$cubiculos));
	  	return $pdf->download('Cubiculos.pdf');
	}

  //----------------------------------------------------------------
  public function viewImg($tipo){
    return view('infraestructura.cubiculos.viewImg')->with(['tipo' => $tipo]);
  }

  public function guardarImg(Request $request, $tipo){
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/cubiculos/' . $tipo, $foto->getClientOriginalName());
      }
    }
    return redirect('/cubiculos/'. $tipo .'/viewImg')->with(['tipo' => $tipo]);
  }

  public function borrarImg($tipo, $imagen)
  {
    $dirImagen = 'infraestructura/cubiculos/' . $tipo . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/cubiculos/'. $tipo .'/viewImg')->with(['tipo' => $tipo]);
  }
}
