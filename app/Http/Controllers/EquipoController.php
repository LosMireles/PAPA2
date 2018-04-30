<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Equipo;

class EquipoController extends Controller
{
	public function equipos(){
        return view('equipamiento/equipos');
    }

    public function agregar_equipo(){
    	/// Tomar todos los espacios de la base de datos
    	$espacios = DB::table('espacios')->get();
    	/// Tomar todos los softwares de la base de datos
    	$software = DB::table('softwares')->get();
        return view('equipamiento/gestion_equipos/agregar_equipo', ['espacios'=>$espacios, 'software'=>$software]);
    }

    public function ver_equipos(){
    	$equipos = DB::table('equipos')->get();
    	return view('equipamiento/gestion_equipos/ver_equipos', ['equipos'=>$equipos]);
    }

    public function eliminar_equipos(){
    	$equipos = DB::table('equipos')->get();
    	return view('equipamiento/gestion_equipos/eliminar_equipos',['equipos'=>$equipos]);
    }

    public function actualizar_equipos(){
    	$equipos = DB::table('equipos')->get();
    	return view('equipamiento/gestion_equipos/actualizar_equipos',['equipos'=>$equipos]);	
    }

    public function mostrar_datos_equipo($id){
    	$equipo  = Equipo::where('serial', $id)->first();
    	$software = DB::table('softwares')->get();
    	$espacios = DB::table('espacios')->get();
    	return view('equipamiento/gestion_equipos/actualizar_equipo',['equipo'=>$equipo, 'software'=>$software, 'espacios'=>$espacios]);
    }


    /// POST
    public function gestion_equipo_agregar(Request $request){
    	$equipo = new Equipo;

    	$equipo->serial = $request->serial;
    	$equipo->manualUsuario = $request->manual;
    	$equipo->operable = $request->operable;
    	$equipo->localizacion = $request->localizacion;

    	$equipo->software = $request->software;

    	$equipo->save();
    	echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarCubiculo">Click Here</a> to go back.';
    }

    public function gestion_equipo_borrar(Request $request){
    	$serial = $request->serial;
	  	DB::delete('delete from equipos where serial = ?',[$serial]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "#">Click Here</a> to go back.';
    }

    public function gestion_equipo_modificar(Request $request){
    	$serial = $request->serial;
    	$manualUsuario = $request->manual;
    	$operable = $request->operable;
    	$localizacion = $request->localizacion;
    	$software = $request->software;

    	Equipo::where('serial', $serial)->update([
            'serial' => $serial, 'manualUsuario' => $manualUsuario,'operable'=>$operable,
            'localizacion'=>$localizacion, 'software' => $software
        ]);

        echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarSoftware">Click Here</a> to go back.';
    }
}
