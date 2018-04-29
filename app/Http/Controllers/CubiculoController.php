<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cubiculo;

class CubiculoController extends Controller {
   public function insertform(){
      return view('infraestructura/cubiculo_create');
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

        $cubiculo = new Cubiculo;

        $cubiculo->Tipo = $request->Tipo;
	$cubiculo->Profesor = $request->Profesor;
	$cubiculo->CantidadEquipo = $request->CantidadEquipo;

        $cubiculo->save();
	echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarCubiculo">Click Here</a> to go back.';
    }
}
