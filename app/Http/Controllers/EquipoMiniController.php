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
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($url_regreso = null)
    {
        return view('equipamiento.equiposMini.create')
            ->with([
                'url_previous' => url()->previous(),
                'url_regreso'  => $url_regreso
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $url_regreso = null)
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

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento agregado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento agregado exitosamente');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($serial, $url_regreso = null){
    	$equipo = Equipo::where('serial', $serial)->first();

    	return view('equipamiento.equiposMini.edit')
            ->with([
                'equipo'       => $equipo,
                'url_previous' => url()->previous(),
                'url_regreso'  => $url_regreso
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $serial, $url_regreso = null){
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

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($serial, $url_regreso = null)
    {
        $equipo = Equipo::where('serial', $serial)->first();
        if(!$equipo){
            $mensaje = "No existe equipo con serial: ".$serial;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $equipo->delete();

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento borrado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento borrado exitosamente');
        }
    }

	public function rules($serial = null){
        return [
                'serial'        => ['required',
                                Rule::unique('equipos')->ignore($serial, 'serial')]
               ];
    }
}
