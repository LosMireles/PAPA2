<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Asignatura;
use App\Curso;

class AsignaturaController extends Controller
{
    public function index_ver(){
    	return view('asignaturas/index');
    }

    public function agregar_asignatura(){
    	return view('asignaturas/agregar_asignatura');
    }

    public function actualizar_asignaturas(){
        $asignaturas = DB::table('asignaturas')->get();
    	return view('asignaturas/actualizar_asignaturas', ['asignaturas'=>$asignaturas]);
    }

    public function actualizar_asignaturas_especifico($id){
        $asignatura  =  Asignatura::where('id', $id)->first();

        return view('asignaturas/actualizar_asignaturas_especifico', ['asignatura'=>$asignatura]);
    }

    public function ver_asignaturas(){
    	$asignaturas = DB::table('asignaturas')->get();

        return view('asignaturas/ver_asignaturas',
            ['asignaturas' => $asignaturas]);
    }

    public function eliminar_asignatura(){
        $asignaturas = DB::table('asignaturas')->get();
    	return view('asignaturas/eliminar_asignatura', ['asignaturas'=>$asignaturas]);
    }

    /// ------------------------------------------------------------------------------

    public function agregar_asignatura_post(Request $request){
        $asignatura              = new Asignatura;

        $asignatura->nombre      = $request->asignatura;
        $asignatura->descripcion = $request->descripcion;

        $asignatura->save();
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go home.';
    }

    public function actualizar_asignaturas_post(Request $request){
        $nombre      = $request->nombre;
        $descripcion = $request->descripcion;

        DB::table('asignaturas')->where('id', $request->id)->update([
            'nombre' => $nombre,'descripcion' => $descripcion
        ]);

        echo "Record updated successfully.<br/>";
        echo '<a href = "/">Click here</a> to go home.';
    }

    public function eliminar_asignatura_post(Request $request){
        $nombre = $request->nombre;
        DB::delete('delete from asignaturas where nombre = ?',[$nombre]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go home.';
    }
}

