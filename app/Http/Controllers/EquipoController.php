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
        return redirect("/");
    }

    //----------------------------------------------------------------
    public function create($url_regreso = null){
    	$softwares = Software::all();
        return view('equipamiento.equipos.create')
            ->with([
                'softwares'     => $softwares,
                'tipos'         => $this->tipos,
                'url_previous'  => url()->previous(),
                'url_regreso'   => $url_regreso
            ]);
    }
    //----------------------------------------------------------------
    public function crear_igual($serial, $url_regreso = null){
        $equipo = Equipo::where('serial', $serial)->first();
        $softwares = Software::all();
        return view('equipamiento.equipos.create_igual')
            ->with([
                'softwares' => $softwares,
                'tipos'     => $this->tipos,
                'equipo'    => $equipo,
                'url_previous' => url()->previous(),
                'url_regreso'  => $url_regreso
            ]);
    }

    //----------------------------------------------------------------
    public function store(Request $request, $url_regreso = null){
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

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento agregado exitosamente');
        }else{
            return redirect(url('/inciso_9_2_7'))
                ->with('status', 'Elemento agregado exitosamente');
        }
    }

    //----------------------------------------------------------------
    public function edit($serial, $url_regreso = null){
    	$equipo = Equipo::where('serial', $serial)->first();

    	return view('equipamiento.equipos.edit')
            ->with([
                'equipo'       => $equipo,
                'tipos'        => $this->tipos,
                'url_previous' => url()->previous(),
                'url_regreso'  => $url_regreso
            ]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $serial, $url_regreso = null){
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

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
    }

    //----------------------------------------------------------------
    public function destroy($serial, $url_regreso = null){
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

    //----------------------------------------------------------------
    public function rules($serial = null){
        return [
                'serial'        => ['required',
                                Rule::unique('equipos')->ignore($serial, 'serial')]
               ];
    }
}

