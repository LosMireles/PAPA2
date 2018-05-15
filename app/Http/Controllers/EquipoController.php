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
	public function equipos(){
        return view('equipamiento/equipos');
    }

    public function agregar_equipo(){
    	/// Tomar todos los espacios de la base de datos
    	$espacios = Espacio::all();
    	/// Tomar todos los softwares de la base de datos
    	$softwares = Software::all();
        return view('equipamiento/gestion_equipos/agregar_equipo', ['espacios'=>$espacios, 'softwares'=>$softwares]);
    }

    public function ver_equipos(){
    	$equipos = Equipo::all();

    	return view('equipamiento/gestion_equipos/ver_equipos', ['equipos'=>$equipos]);
    }

    public function eliminar_equipos(){
    	$equipos = Equipo::all();
    	return view('equipamiento/gestion_equipos/eliminar_equipos',['equipos'=>$equipos]);
    }

    public function actualizar_equipos(){
    	$equipos = Equipo::all();
        $softwares = Software::all();
    	return view('equipamiento/gestion_equipos/actualizar_equipos',
    	    ['equipos'=>$equipos, 'softwares' => $softwares]);
    }

    public function mostrar_datos_equipo($id){
    	$equipo     = Equipo::where('serial', $id)->first();
    	$espacios   = Espacio::all();
        $softwares  = Software::all();
        $equipo_softwares = DB::table('equipo_software')->get();

    	return view('equipamiento/gestion_equipos/actualizar_equipo',
    	    ['equipo'=>$equipo, 'espacios'=>$espacios, 'softwares' => $softwares, 'equipo_softwares' => $equipo_softwares]);
    }


    /// POST
    public function gestion_equipo_agregar(Request $request){
    	$equipo = new Equipo;

    	$equipo->serial = $request->serial;
    	$equipo->manualUsuario = $request->manual;
    	$equipo->operable = $request->operable;
    	$equipo->localizacion = $request->localizacion;

    	$equipo->save();

        foreach($request->nombres as $nombreSoftware){
            $softwareId = DB::table('softwares')->where('nombre', $nombreSoftware)->value('id');
            $equipo->softwares()->attach($softwareId);
        }

    	echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go home.';
    }

    public function gestion_equipo_borrar(Request $request){
    	$serial = $request->serial;
	  	DB::delete('delete from equipos where serial = ?',[$serial]);

	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/">Click Here</a> to go home.';
    }

    public function gestion_equipo_modificar(Request $request){
    	$id = $request->id;
        $serial = $request->serial;
    	$manualUsuario = $request->manual;
    	$operable = $request->operable;
    	$localizacion = $request->localizacion;
    	$nombre_softwares = $request->nombre_software;

        $idSoftwares = [];
        foreach($nombre_softwares as $nombre){
            $idSoftwares[] = DB::table('softwares')->where('nombre', $nombre)->value('id');
        }

        $equipo = Equipo::where('id', $id)->first();
    	$equipo->update([
            'manualUsuario' => $manualUsuario,'operable'=>$operable,
            'localizacion'=>$localizacion, 'serial' => $serial
        ]);

        $equipo->softwares()->sync($idSoftwares);

        echo "Record updated successfully.<br/>";
	  	echo '<a href = "/">Click here</a> to go home.';
    }
}

