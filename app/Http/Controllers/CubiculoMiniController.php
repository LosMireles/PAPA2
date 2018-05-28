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

class CubiculoMiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infraestructura.cubiculosMini.create')
        ->with([
            'url_previous'  => url()->previous()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculosMini/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

        $cubiculo = new Cubiculo;

        $cubiculo->nombre          = $request->nombre;
		$cubiculo->profesor        = $request->profesor;
		$cubiculo->cantidad_equipo = '0';

        $cubiculo->save();

        echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nombre)
    {
        $cubiculo  = Cubiculo::where('nombre', $nombre)->first();

		return view('infraestructura.cubiculosMini.edit')
		    ->with([
		        'cubiculo'      => $cubiculo,
		        'url_previous'  => url()->previous()
		    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$nombre) {
        $request->validate($this->rules($nombre));

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/cubiculosMini/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        $data = [
            'nombre'          => $request->nombre,
            'profesor'        => $request->profesor,
            'cantidad_equipo' => '0'
        ];

        $cubiculo->update($data);

		echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $nombre){
        Storage::deleteDirectory('infraestructura/cubiculosMini/'. $nombre . '/');
        $cubiculo = Cubiculo::where('nombre', $nombre)->first();
        if(!$cubiculo){
            $mensaje = "No existe cubiculo con nombre: ".$nombre;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $cubiculo->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->back()
            ->with('status', 'Elemento borrado exitosamente');
    }


	public function rules($nombre = null){
        return [
            'nombre' => ['required',
                        Rule::unique('cubiculos')->ignore($nombre, 'nombre')],
        ];
    }

  //----------------------------------------------------------------
  public function viewImg($nombre){
    return view('infraestructura.cubiculosMini.viewImg')->with(['nombre' => $nombre]);
  }

  public function guardarImg(Request $request, $nombre){
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/cubiculosMini/' . $nombre, $foto->getClientOriginalName());
      }
    }
    return redirect('/cubiculosMini/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

  public function borrarImg($nombre, $imagen)
  {
    $dirImagen = 'infraestructura/cubiculosMini/' . $nombre . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/cubiculosMini/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }
}
