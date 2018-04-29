<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cubiculo;

class CubiculoController extends Controller {
	
      public function indexVer(){
      //$cubiculos = DB::select('select * from cubiculos');
      $cubiculos  = Cubiculo::all();
      return view('infraestructura/Cubiculo_view',['cubiculos'=>$cubiculos]);
   }
//----------------------------------------------------------------
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
	//-----------------------------------------------------------


	public function indexBorrar(){
  		$cubiculos = DB::select('select * from cubiculos');
	  	return view('infraestructura/cubiculo_delete_view',['cubiculos'=>$cubiculos]);
	}
	public function destroy($id) {
		//DB::delete('delete from cubiculos where IdCubiculo = ?',[$id]);
		Cubiculo::where('IdCubiculo', $id)->delete();
		echo "Record deleted successfully.<br/>";
		echo '<a href = "/borrarCubiculo">Click Here</a> to go back.';
	}
}
