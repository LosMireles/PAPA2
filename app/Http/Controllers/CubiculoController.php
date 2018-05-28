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
            $foto->storeAs('infraestructura/cubiculos/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

        $cubiculo = new Cubiculo;

        $cubiculo->nombre          = $request->nombre;
		$cubiculo->profesor        = $request->profesor;
		$cubiculo->cantidad_equipo = $request->cantidad_equipo;

        $cubiculo->save();

        echo "Elemento insertado exitosamente!";
        return redirect()->action('Inciso9_1_9Controller@index');
  }

    //----------------------------------------------------------------
	public function edit($nombre) {
        $cubiculo  = Cubiculo::where('nombre', $nombre)->first();

    return view('infraestructura.cubiculos.edit')
        ->with(['cubiculo'=>$cubiculo]);
	}

    //----------------------------------------------------------------
	public function update(Request $request, $nombre) {
        $request->validate($this->rules($nombre));

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculos/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        $data = [
            'nombre'          => $request->nombre,
            'profesor'        => $request->profesor,
            'cantidad_equipo' => $request->cantidad_equipo
        ];

        $cubiculo->update($data);

		echo "Elemento insertado exitosamente!";
        return redirect()->action('Inciso9_1_9Controller@index');
	}

    //----------------------------------------------------------------
	public function destroy(Request $request, $nombre){
        Storage::deleteDirectory('infraestructura/cubiculos/'. $nombre . '/');
        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        if(!$cubiculo){
            $mensaje = "No existe cubiculo con nombre: ".$nombre;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $cubiculo->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('Inciso9_1_9Controller@index');
	}

    //----------------------------------------------------------------
    public function rules($nombre = null){
        return [
            'nombre' => ['required',
                        Rule::unique('cubiculos')->ignore($nombre, 'nombre')],
        ];
    }

	//*********************************************************************
	public function imprimir() {
	  	$cubiculos  = Cubiculo::all();

        $pdf = PDF::loadView('infraestructura.cubiculos.index2',array('cubiculos'=>$cubiculos));
	  	return $pdf->download('Cubiculos.pdf');
	}

  //----------------------------------------------------------------
  public function viewImg($nombre){
    return view('infraestructura.cubiculos.viewImg')->with(['nombre' => $nombre]);
  }

  public function guardarImg(Request $request, $nombre){
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/cubiculos/' . $nombre, $foto->getClientOriginalName());
      }
    }
    return redirect('/cubiculos/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

  public function borrarImg($nombre, $imagen)
  {
    $dirImagen = 'infraestructura/cubiculos/' . $nombre . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/cubiculos/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }
}
