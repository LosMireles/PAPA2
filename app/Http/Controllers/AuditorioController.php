<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Auditorio;

class AuditorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function indexVer()
     {
         //
         $auditorios = Auditorio::all();
         return view('infraestructura/auditorio/auditorio_view',
             ['auditorios' => $auditorios]);
     }

     //----------------------------------------------------------------
         public function insertform()
         {
             return view('infraestructura/auditorio/auditorio_create');
         }
         public function dummie(){
     		header("Location: http://127.0.0.1:8000/insertarAuditorio?tipo=".urlencode(""));
     	  	die();
     	}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $auditorio = new Auditorio;

        $auditorio->Tipo = $request->Tipo;
		$auditorio->CantidadEquipo = $request->CantidadEquipo;
		$auditorio->CantidadAV = $request->CantidadAV;
        $auditorio->Capacidad = $request->Capacidad;
		$auditorio->CantidadSanitarios = $request->CantidadSanitarios;

        $auditorio->save();
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarAuditorios">Click Here</a> to go back.';

    }

    //--------------------------------------------------------

    public function indexBorrar(){
        $auditorios  = Auditorio::all();
        return view('infraestructura/auditorio/auditorio_delete',['auditorios'=>$auditorios]);
    }
    public function destroy(Request $request){
	  	$Tipo = $request->Tipo;

        $auditorio = auditorio::where('Tipo', $Tipo)->first();
        if(!$auditorio){
            $mensaje = "No existe auditorio con tipo: ".$Tipo;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $auditorio->delete();

        echo "Record deleted successfully.<br/>";
        echo '<a href = "/borrarAuditorio">Click Here</a> to go back.';
    }


//--------------------------------------------------------
    public function indexEditar(){
        $auditorios  = Auditorio::all();
        return view('infraestructura/auditorio/auditorio_edit_view',['auditorios'=>$auditorios]);
    }
    public function show($id) {
          $auditorios  = Auditorio::where('IdAuditorio', $id)->first();
        return view('infraestructura/auditorio/auditorio_update',['auditorios'=>$auditorios]);
    }
    public function edit(Request $request,$id) {


        $auditorio->Tipo = $request->Tipo;
        $auditorio->CantidadEquipo = $request->CantidadEquipo;
        $auditorio->CantidadAV = $request->CantidadAV;
        $auditorio->Capacidad = $request->Capacidad;
        $auditorio->CantidadSanitarios = $request->CantidadSanitarios;

        Auditorio::where('IdAuditorio', $id)->update([
            'Tipo' => $Tipo,
            'CantidadEquipo' => $CantidadEquipo,
            'CantidadAV' => $CantidadAV,
            'Capacidad' => $Capacidad,
            'CantidadSanitarios' => $CantidadSanitarios
        ]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/editarAuditorio">Click Here</a> to go back.';
    }
}
