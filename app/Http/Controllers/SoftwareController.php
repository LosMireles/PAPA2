<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Software;
use App\Equipo;

//////Arreglo de posibles clases
//////Puesto aqui para no ponerlo en un
//////modelo y repetir informacion
//////Pero deberia estar en otro lado
//////
class SoftwareController extends Controller {

    private $clases = ['lenguaje', 'libreria', 'case'];

    public function indexVer(){
        $softwares  = Software::all();
        return view('equipamiento/software/software_view',['softwares'=>$softwares]);
    }

    //----------------------------------------------------------------
    public function insertform(){
        $equipos = Equipo::all();
        return view('equipamiento/software/software_create',
            ['equipos'=>$equipos, 'clases' => $this->clases]);
	}

	/**
     * Create a new software instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        /// Tomar todos los equipos de la base de datos
        $software = new Software;

        $software->nombre = $request->nombre;
        $software->manualUsuario = $request->manualUsuario;
		$software->licencia = $request->licencia;
		$software->disponibilidad = $request->disponibilidad;
		$software->clase = $request->clase;

        $software->save();

        foreach($request->equipo as $serial){
            $equipoId = DB::table('equipos')->where('serial', $serial)->value('id');
            $software->equipos()->attach($equipoId);
        }

		echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarSoftware">Click Here</a> to go back.';
    }
	//-----------------------------------------------------------

	public function indexBorrar(){
		$softwares  = Software::all();

      	return view('equipamiento/software/software_delete', ['softwares'=>$softwares]);
	}

	public function destroy(Request $request){
	  	$nombre = $request->input('nombre');
	  	DB::delete('delete from softwares where nombre = ?',[$nombre]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/borrarSoftware">Click Here</a> to go back.';
	}

	//*-----------------------------------------------------------------
	public function index(){
	  	$softwares  = Software::all();
	  	return view('equipamiento/software/software_edit_view', ['softwares'=>$softwares]);
	}

	public function show($nombre) {
		$software  = Software::where('nombre', $nombre)->first();
	  	$equipos    = Equipo::all();
	  	return view('equipamiento/software/software_update',
	  	    ['software' =>$software,
            'equipos'   => $equipos,
            'clases'    => $this->clases]);
	}

	public function edit(Request $request, $nombre) {
	  	$nombre = $request->input('nombre');
	  	$manualUsuario = $request->input('manualUsuario');
	  	$licencia = $request->input('licencia');
	  	$disponibilidad = $request->input('disponibilidad');
	  	$clase = $request->input('clase');
	  	$serialEquipos = $request->input('equipos');

        $idEquipos = [];
        foreach($serialEquipos as $serial){
            $idEquipos[] = DB::table('equipos')->where('serial', $serial)->value('id');
        }

        $software = Software::where('nombre', $nombre)->first();
		$software->update([
            'nombre' => $nombre, 'manualUsuario' => $manualUsuario,'licencia'=>$licencia,
            'disponibilidad'=>$disponibilidad, 'clase' => $clase
        ]);

        //hay que hacer sync para que los equipos palomeados se agreguen a los software
        //y los no palomeados sean removidos
        $software->equipos()->sync($idEquipos);

	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarSoftware">Click Here</a> to go back.';
	}

    //*-----------------------------------------------------------------
}

