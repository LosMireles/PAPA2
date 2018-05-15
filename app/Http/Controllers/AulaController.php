<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aula;

class AulaController extends Controller
{
    public function indexVer(){
      //$cubiculos = DB::select('select * from cubiculos');
      $aulas  = Aula::all();
      return view('infraestructura/aula/aula_view',['aulas'=>$aulas]);
    }

//--------------------------------------------------------
	public function insertform(){
	  return view('infraestructura/aula/aula_create');
	}

	public function dummie(){
		header("Location: http://127.0.0.1:8000/insertarAula?tipo=".urlencode(""));
	  	die();
	}
	/**
     * Create a new cubiculo instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $aula = new Aula;

        $aula->Tipo = $request->Tipo;
		$aula->CantidadEquipo = $request->CantidadEquipo;
		$aula->CantidadAV = $request->CantidadAV;
		$aula->Capacidad = $request->Capacidad;
		if(isset($request->SillasPaleta) &&
		$request->SillasPaleta == '1')
		{
			$aula->SillasPaleta = '1';
		}
		else
		{
			$aula->SillasPaleta = '0';
		}
		if(isset($request->MesasTrabajo) &&
		$request->MesasTrabajo == '1')
		{
			$aula->MesasTrabajo = '1';
		}
		else
		{
			$aula->MesasTrabajo = '0';
		}
		if(isset($request->Isotopica) &&
		$request->Isotopica == '1')
		{
			$aula->Isotopica = '1';
		}
		else
		{
			$aula->Isotopica = '0';
		}
		if(isset($request->Estrado) &&
		$request->Estrado == '1')
		{
			$aula->Estrado = '1';
		}
		else
		{
			$aula->Estrado = '0';
		}
		$aula->Pizarron = $request->Pizarron;
		$aula->Illuminacion = $request->Illuminacion;
		$aula->AislamientoR = $request->AislamientoR;
		$aula->Ventilacion = $request->Ventilacion;
		$aula->Temperatura = $request->Temperatura;
		$aula->Espacio = $request->Espacio;
		$aula->Mobilario = $request->Mobilario;
		$aula->Conexiones = $request->Conexiones;

        $aula->save();
		echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarAulas">Click Here</a> to go back.';
    }


	//-----------------------------------------------------------

	public function indexBorrar(){
		$aulas  = Aula::all();
      	return view('infraestructura/aula/aula_delete',['aulas'=>$aulas]);
	}
	public function destroy(Request $request){
	  	$Tipo = $request->input('Tipo');
	  	DB::delete('delete from aulas where Tipo = ?',[$Tipo]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/borrarAula">Click Here</a> to go back.';
	}

	//--------------------------------------------------------------
	public function indexEditar(){
	  	$aulas  = Aula::all();
	  	return view('infraestructura/aula/aula_edit_view',['aulas'=>$aulas]);
	}
	public function show($id) {
		$aulas  = Aula::where('IdAula', $id)->first();
	  	return view('infraestructura/aula/aula_update',['aulas'=>$aulas]);
	}
	public function edit(Request $request,$id) {
	  	$Tipo = $request->Tipo;
		$CantidadEquipo = $request->CantidadEquipo;
		$CantidadAV = $request->CantidadAV;
		$Capacidad = $request->Capacidad;
		if(isset($request->SillasPaleta) &&
		$request->SillasPaleta == '1')
		{
			$SillasPaleta = '1';
		}
		else
		{
			$SillasPaleta = '0';
		}
		if(isset($request->MesasTrabajo) &&
		$request->MesasTrabajo == '1')
		{
			$MesasTrabajo = '1';
		}
		else
		{
			$MesasTrabajo = '0';
		}
		if(isset($request->Isotopica) &&
		$request->Isotopica == '1')
		{
			$Isotopica = '1';
		}
		else
		{
			$Isotopica = '0';
		}
		if(isset($request->Estrado) &&
		$request->Estrado == '1')
		{
			$Estrado = '1';
		}
		else
		{
			$Estrado = '0';
		}
		$Pizarron = $request->Pizarron;
		$Illuminacion = $request->Illuminacion;
		$AislamientoR = $request->AislamientoR;
		$Ventilacion = $request->Ventilacion;
		$Temperatura = $request->Temperatura;
		$Espacio = $request->Espacio;
		$Mobilario = $request->Mobilario;
		$Conexiones = $request->Conexiones;

		Aula::where('IdAula', $id)->update(['Tipo' => $Tipo,
											'CantidadEquipo'=>$CantidadEquipo,
											'CantidadAV'=>$CantidadAV,
											'Capacidad'=>$Capacidad,
											'SillasPaleta'=>$SillasPaleta,
											'MesasTrabajo'=>$MesasTrabajo,
											'Isotopica'=>$Isotopica,
											'Estrado'=>$Estrado,
											'Pizarron'=>$Pizarron,
											'Illuminacion'=>$Illuminacion,
											'AislamientoR'=>$AislamientoR,
											'Ventilacion'=>$Ventilacion,
											'Temperatura'=>$Temperatura,
											'Espacio'=>$Espacio,
											'Mobilario'=>$Mobilario,
											'Conexiones'=>$Conexiones]);
	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarAula">Click Here</a> to go back.';
	}

}
