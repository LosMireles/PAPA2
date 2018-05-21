<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Software;
use App\Equipo;
use App\Espacio;

class EquipoController extends Controller
{
	public function index(){
    	$equipos = Equipo::all();
        return view('equipamiento.equipos.index')
            ->with('equipos', $equipos);
    }

    //----------------------------------------------------------------
    public function create(){
    	$espacios  = Espacio::all();
    	$softwares = Software::all();
        return view('equipamiento.equipos.create')
            ->with(['espacios'  => $espacios,
                    'softwares' => $softwares]);
    }

    //----------------------------------------------------------------
    public function store(Request $request){
        $request->validate($this->rules());

    	$equipo = new Equipo;

    	$equipo->serial        = $request->serial;
    	$equipo->manualUsuario = $request->manual;
    	$equipo->operable      = $request->operable;
    	$equipo->localizacion  = $request->localizacion;
        $equipo->tipo          = $request->tipo;
        $equipo->descripcion   = $request->especificaciones;

        // Si el equipo es de cómputo. El equipo cuenta con software
        if($request->nombres){
        	$equipo->save();

            foreach($request->nombres as $nombreSoftware){
                $softwareId = Software::where('nombre', $nombreSoftware)->value('id');
                $equipo->softwares()->attach($softwareId);
            }
        }else{
            $equipo->save();
        }

		echo "Elemento insertado exitosamente!";
        return redirect()->action('EquipoController@index');
    }

    //----------------------------------------------------------------
    public function edit($serial){
    	$equipo           = Equipo::where('serial', $serial)->first();
    	$espacios         = Espacio::all();
        $softwares        = Software::all();
        $equipo_softwares = DB::table('equipo_software')->get();

        $tipo_equipos = ['computo', 'redes', 'audiovisual', 'servidor'];

    	return view('equipamiento.equipos.edit')
            ->with(['equipo'           => $equipo,
                  'espacios'         => $espacios,
                  'softwares'        => $softwares,
                  'equipo_softwares' => $equipo_softwares,
                  'tipo_equipos'     => $tipo_equipos]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $serial){
        $request->validate($this->rules());

        $serial_nuevo       = $request->serial;
    	$manualUsuario      = $request->manual;
    	$operable           = $request->operable;
    	$localizacion       = $request->localizacion;
        $tipo_equipo        = $request->tipo;
        $equipo_descripcion = $request->especificaciones;
    	$nombre_softwares   = $request->nombre_software;

        $equipo = Equipo::where('serial', $serial)->first();
        $tipo_anterior = $equipo->tipo;

        // Quitarle el softwre si era de computo y pasa a ser de otra cosa
        if($tipo_equipo != $tipo_anterior && $tipo_anterior == 'computo'){
            $equipo->softwares()->detach();
        }

        $equipo->update([
            'manualUsuario' => $manualUsuario,
            'operable'      => $operable,
            'localizacion'  => $localizacion,
            'serial'        => $serial_nuevo,
            'tipo'          => $tipo_equipo,
            'descripcion'   => $equipo_descripcion
        ]);

        /// Condicionar a si no hay software ingresado pues no es de computo
        if(!empty($nombre_softwares)){
            $idSoftwares = [];
            foreach($nombre_softwares as $nombre){
                $idSoftwares[] = Software::where('nombre', $nombre)->value('id');
            }

            $equipo->softwares()->sync($idSoftwares);
        }

		echo "Elemento editado exitosamente!";
        return redirect()->action('EquipoController@index');
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
        return redirect()->action('EquipoController@index');
    }

    //----------------------------------------------------------------
    public function rules(){
        return [
            'serial'        => 'required|unique:equipos|alpha_num',
        ];
    }
}

