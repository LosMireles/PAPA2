<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sanitario;

class SanitarioController extends Controller
{
    public function indexVer(){
      //$cubiculos = DB::select('select * from cubiculos');
      $sanitarios  = Sanitario::all();
      return view('infraestructura/sanitario/sanitario_view',['sanitarios'=>$sanitarios]);
    }

//--------------------------------------------------------
	public function insertform(){
	  return view('infraestructura/sanitario/sanitario_create');
	}

	public function dummie(){
		header("Location: http://127.0.0.1:8000/insertarSanitario?tipo=".urlencode(""));
	  	die();
	}


	/**
     * Create a new sanitario instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $sanitario = new Sanitario;

        $sanitario->Tipo = $request->Tipo;
    		$sanitario->InicioHora = $request->InicioHora;
    		$sanitario->FinHora = $request->FinHora;
    		$sanitario->InicioDia = $request->InicioDia;
        $sanitario->FinDia = $request->FinDia;
        $sanitario->Limpieza = $request->Limpieza;
        $sanitario->CantidadPersonal = $request->CantidadPersonal;

        $sanitario->save();
		    echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarSanitarios">Click Here</a> to go back.';
    }


	//-----------------------------------------------------------

	public function indexBorrar(){
		$sanitarios  = Sanitario::all();
      	return view('infraestructura/sanitario/sanitario_delete',['sanitarios'=>$sanitarios]);
	}
	public function destroy(Request $request){
	  	$Tipo = $request->input('Tipo');
	  	DB::delete('delete from sanitarios where Tipo = ?',[$Tipo]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/borrarSanitario">Click Here</a> to go back.';
	}

	//--------------------------------------------------------------
	public function indexEditar(){
	  	$sanitarios  = Sanitario::all();
	  	return view('infraestructura/sanitario/sanitario_edit_view',['sanitarios'=>$sanitarios]);
	}
	public function show($id) {
		  $sanitarios  = Sanitario::where('IdSanitario', $id)->first();
	  	return view('infraestructura/sanitario/sanitario_update',['sanitarios'=>$sanitarios]);
	}
	public function edit(Request $request,$id) {
	  	$Tipo = $request->Tipo;
	    $InicioHora = $request->InicioHora;
	    $FinHora = $request->FinHora;
		  $InicioDia = $request->InicioDia;
		  $FinDia = $request->FinDia;
      $Limpieza = $request->Limpieza;
      $CantidadPersonal = $request->CantidadPersonal;

	    Sanitario::where('IdSanitario', $id)->update(['Tipo' => $Tipo,
											'InicioHora'=>$InicioHora,
											'FinHora'=>$FinHora,
											'InicioDia'=>$InicioDia,
											'FinDia'=>$FinDia,
											'Limpieza'=>$Limpieza,
											'CantidadPersonal'=>$CantidadPersonal]);
	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarSanitario">Click Here</a> to go back.';
	}

}
