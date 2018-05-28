<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Software;
use App\Equipo;

class EquipoController extends Controller
{
    private $tipos = ["Computo", "Redes", "Audiovisual", "Servidor"];

	public function index(){
    	$equipos = Equipo::all();
        return view('equipamiento.equipos.index')
            ->with('equipos', $equipos);
    }

    //----------------------------------------------------------------
    public function create(){
    	$softwares = Software::all();
        return view('equipamiento.equipos.create')
            ->with([
                'softwares'    => $softwares,
                'tipos'        => $this->tipos,
                'url_previous' => url()->previous()
            ]);
    }

    //----------------------------------------------------------------
    public function store(Request $request){
        $request->validate($this->rules());

    	$equipo = new Equipo;

    	$equipo->serial                = $request->serial;
        $equipo->tipo                  = $request->tipo;
        $equipo->sistema_operativo     = $request->sistema_operativo;
        $equipo->marca                 = $request->marca;
        $equipo->cpu                   = $request->cpu;
        $equipo->almacenamiento        = $request->almacenamiento;
        $equipo->ram                   = $request->ram;
        $equipo->otras_caracteristicas = $request->otras_caracteristicas;

        $equipo->save();

		echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)->with('status', 'Elemento agregado exitosamente');
    }

    //----------------------------------------------------------------
    public function edit($serial){
    	$equipo = Equipo::where('serial', $serial)->first();

    	return view('equipamiento.equipos.edit')
            ->with([
                'equipo'       => $equipo,
                'tipos'        => $this->tipos,
                'url_previous' => url()->previous()
            ]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $serial){
        $request->validate($this->rules($serial));

        $equipo = Equipo::where('serial', $serial)->first();

        $data = [
    	'serial'                => $request->serial,
        'tipo'                  => $request->tipo,
        'sistema_operativo'     => $request->sistema_operativo,
        'marca'                 => $request->marca,
        'cpu'                   => $request->cpu,
        'almacenamiento'        => $request->almacenamiento,
        'ram'                   => $request->ram,
        'otras_caracteristicas' => $request->otras_caracteristicas
        ];

        $equipo->update($data);

		echo "Elemento editado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
    }

    //----------------------------------------------------------------
    public function destroy($serial){
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

    //----------------------------------------------------------------
    public function rules($serial = null){
        return [
                'serial'        => ['required',
                                Rule::unique('equipos')->ignore($serial, 'serial')]
               ];
    }
}

