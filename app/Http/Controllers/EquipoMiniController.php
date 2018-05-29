<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Equipo;

class EquipoMiniController extends Controller
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
        return view('equipamiento.equiposMini.create')
            ->with(['url_previous' => url()->previous()
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

    	$equipo = new Equipo;

    	$equipo->serial                = $request->serial;
        $equipo->tipo                  = "Computo";
        $equipo->sistema_operativo     = $request->sistema_operativo;
        $equipo->marca                 = $request->marca;
        $equipo->cpu                   = "";
        $equipo->almacenamiento        = "";
        $equipo->ram                   = "";
        $equipo->otras_caracteristicas = "";

        $equipo->save();

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
    public function edit($serial){
    	$equipo = Equipo::where('serial', $serial)->first();

    	return view('equipamiento.equiposMini.edit')
            ->with([
                'equipo'       => $equipo,
                'url_previous' => url()->previous()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $serial){
        $request->validate($this->rules($serial));

        $equipo = Equipo::where('serial', $serial)->first();

        $data = [
    	'serial'                => $request->serial,
        'tipo'                  => "Computo",
        'sistema_operativo'     => $request->sistema_operativo,
        'marca'                 => $request->marca,
        'cpu'                   => "",
        'almacenamiento'        => "",
        'ram'                   => "",
        'otras_caracteristicas' => ""
        ];

        $equipo->update($data);

		echo "Elemento editado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($serial)
    {
        $equipo = Equipo::where('serial', $serial)->first();
        if(!$equipo){
            $mensaje = "No existe equipo con serial: ".$serial;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $equipo->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->back()
            ->with('status', 'Elemento borrado exitosamente');
    }

	public function rules($serial = null){
        return [
                'serial'        => ['required',
                                Rule::unique('equipos')->ignore($serial, 'serial')]
               ];
    }
}
