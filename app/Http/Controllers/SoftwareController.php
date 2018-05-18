<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Software;
use App\Equipo;

class SoftwareController extends Controller {

    private $clases = ['lenguaje', 'libreria', 'case'];

    public function index(){
        $softwares  = Software::all();
        return view('equipamiento.softwares.index')
            ->with('softwares', $softwares);
    }

    //----------------------------------------------------------------
    public function create(){
        $equipos = Equipo::all();
        return view('equipamiento.softwares.create')
            ->with(['equipos'=>$equipos,
                    'clases' => $this->clases]);
	}

    //----------------------------------------------------------------
	/**
     * Create a new software instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        /// Tomar todos los equipos de la base de datos
        $software                 = new Software;

        $software->nombre         = $request->nombre;
        $software->manualUsuario  = $request->manualUsuario;
		$software->licencia       = $request->licencia;
		$software->disponibilidad = $request->disponibilidad;
		$software->clase          = $request->clase;
        $equipos                  = $request->equipo;

        $software->save();

        if(!empty($equipos)){
            foreach($equipos as $serial){
                $equipoId = DB::table('equipos')->where('serial', $serial)->value('id');
                $software->equipos()->attach($equipoId);
            }
        }

		echo "Elemento insertado exitosamente!";
        return redirect()->action('SoftwareController@create');
    }

	//*-----------------------------------------------------------------
	public function edit($nombre) {
        $equipo_softwares = DB::table('equipo_software')->get();
		$software         = Software::where('nombre', $nombre)->first();
	  	$equipos          = Equipo::all();

	  	return view('equipamiento.softwares.edit')
	  	    ->with(['software'         => $software,
                    'equipos'          => $equipos,
                    'clases'           => $this->clases,
                    'equipo_softwares' => $equipo_softwares]);
	}

	//*-----------------------------------------------------------------
    public function update($nombre){
	  	$nombre         = $request->input('nombre');
	  	$manualUsuario  = $request->input('manualUsuario');
	  	$licencia       = $request->input('licencia');
	  	$disponibilidad = $request->input('disponibilidad');
	  	$clase          = $request->input('clase');
	  	$serialEquipos  = $request->input('equipos');

        $idEquipos = [];
        foreach($serialEquipos as $serial){
            $idEquipos[] = DB::table('equipos')->where('serial', $serial)->value('id');
        }

        $software = Software::where('id', $request->id)->first();
		$software->update([
            'nombre'         => $nombre,
            'manualUsuario'  => $manualUsuario,
            'licencia'       => $licencia,
            'disponibilidad' => $disponibilidad,
            'clase'          => $clase
        ]);

        //hay que hacer sync para que los equipos palomeados se agreguen a los software
        //y los no palomeados sean removidos
        $software->equipos()->sync($idEquipos);

		echo "Elemento editado exitosamente!";
        return redirect()->action('SoftwareController@index');
        //return redirect()->action('SoftwareController@edit',
            //['nombre' => $nombre]);
    }

    //*-----------------------------------------------------------------
	public function destroy($nombre){
        $software = Software::where('nombre', $nombre)->first();
        if(!$software){
            $mensaje = "No existe software con nombre: ".$nombre;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $software->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('SoftwareController@index');
	}
}

