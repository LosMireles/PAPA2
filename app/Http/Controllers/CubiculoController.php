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
	public function create($url_regreso = null){
	  return view('infraestructura.cubiculos.create')
        ->with([
            'url_previous'  => url()->previous(),
            'url_regreso'    => $url_regreso
        ]);
	}

    //----------------------------------------------------------------
    public function store(Request $request, $url_regreso = null)
    {
        $request->validate($this->rules());

        $cubiculo = new Cubiculo;

        $cubiculo->nombre          = $request->nombre;
		$cubiculo->profesor        = $request->profesor;
		$cubiculo->cantidad_equipo = $request->cantidad_equipo;

        $cubiculo->save();

        $cubAux = Cubiculo::where('nombre', $request->nombre)->first();
        $id = $cubAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculos/' . $id, $foto->getClientOriginalName());
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

    //----------------------------------------------------------------
	public function edit($nombre, $url_regreso = null) {
        $cubiculo  = Cubiculo::where('nombre', $nombre)->first();

    return view('infraestructura.cubiculos.edit')
        ->with([
            'cubiculo'      => $cubiculo,
            'url_previous'  => url()->previous(),
            'url_regreso'    => $url_regreso
        ]);
	}

    //----------------------------------------------------------------
	public function update(Request $request, $nombre, $url_regreso = null) {
        $request->validate($this->rules($nombre));

        $cubAux = Cubiculo::where('nombre', $nombre)->first();
        $id = $cubAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculos/' . $id, $foto->getClientOriginalName());
          }
        }

        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        $data = [
            'nombre'          => $request->nombre,
            'profesor'        => $request->profesor,
            'cantidad_equipo' => $request->cantidad_equipo
        ];

        $cubiculo->update($data);

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
	}

    //----------------------------------------------------------------
	public function destroy($nombre, $url_regreso = null){
        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        Storage::deleteDirectory('infraestructura/cubiculos/'. $cubiculo->id . '/');
        Storage::deleteDirectory('infraestructura/cubiculosMini/'. $cubiculo->id . '/');
        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        if(!$cubiculo){
            $mensaje = "No existe cubiculo con nombre: ".$nombre;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $cubiculo->delete();

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento borrado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento borrado exitosamente');
        }
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
    $cubAux = Cubiculo::where('nombre', $nombre)->first();
    $id = $cubAux->id;
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/cubiculos/' . $id, $foto->getClientOriginalName());
      }
    }
    return redirect('/cubiculos/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

  public function borrarImg($nombre, $imagen)
  {
    $cubAux = Cubiculo::where('nombre', $nombre)->first();
    $id = $cubAux->id;
    $dirImagen = 'infraestructura/cubiculos/' . $id . '/' . $imagen;
    Storage::delete($dirImagen);
    $dirImagen = 'infraestructura/cubiculosMini/' . $id . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/cubiculos/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }
}
