<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Software;

class SoftwareController extends Controller {
      public function indexVer(){
      $softwares  = Software::all();
      return view('equipamiento/software/software_view',['softwares'=>$softwares]);
   }
//----------------------------------------------------------------
	public function insertform(){
	  return view('equipamiento/software/software_create');
	}

	/**
     * Create a new software instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $software = new Software;

        $software->nombre = $request->nombre;
        $software->manualUsuario = $request->manualUsuario;
		$software->licencia = $request->licencia;
		$software->disponibilidad = $request->disponibilidad;
		$software->clase = $request->clase;
		$software->serial = $request->serial;

        $software->save();
		echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarSoftware">Click Here</a> to go back.';
    }
	//-----------------------------------------------------------

	public function indexBorrar(){
		$softwares  = Software::all();
      	return view('equipamiento/software/software_delete',['softwares'=>$softwares]);
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
	  	return view('equipamiento/software/software_edit_view',['softwares'=>$softwares]);
	}
	public function show($id) {
		$softwares  = Software::where('nombre', $id)->first();
	  	return view('equipamiento/software/software_update',['softwares'=>$softwares]);
	}
	public function edit(Request $request, $id) {
	  	$nombre = $request->input('nombre');
	  	$manualUsuario = $request->input('manualUsuario');
	  	$licencia = $request->input('licencia');
	  	$disponibilidad = $request->input('disponibilidad');
	  	$clase = $request->input('clase');
	  	$serial = $request->input('serial');

		Software::where('nombre', $id)->update([
            'nombre' => $nombre, 'manualUsuario' => $manualUsuario,'licencia'=>$licencia,
            'disponibilidad'=>$disponibilidad, 'clase' => $clase, 'serial' => $serial
        ]);
	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarSoftware">Click Here</a> to go back.';
	}
}
