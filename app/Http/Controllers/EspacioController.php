<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Espacio;

class EspacioController extends Controller {
      public function indexVer(){
      $espacios  = Espacio::all();
      return view('infraestructura/espacio/espacio_view',['espacios'=>$espacios]);
   }
//----------------------------------------------------------------
	public function insertform(){
	  return view('infraestructura/espacio/espacio_create');
	}

	/**
     * Create a new espacio instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $espacio = new Espacio;

        $espacio->tipo = $request->tipo;
		$espacio->superficie = $request->superficie;
		$espacio->cantidad = $request->cantidad;
		$espacio->clase = $request->clase;

        $espacio->save();

		$clase =$request->input('clase');

		if($clase == 'Aula') 
		{
			header("Location: http://127.0.0.1:8000/insertarAula?tipo=".urlencode($request->input('tipo')));
			die();
		}
		if($clase == 'Cubiculo') 
		{
			header("Location: http://127.0.0.1:8000/insertarCubiculo");
			die();
		}
	
		echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarEspacio">Click Here</a> to go back.';
    }
	//-----------------------------------------------------------

	public function indexBorrar(){
		$espacios  = Espacio::all();
      	return view('infraestructura/espacio/espacio_delete',['espacios'=>$espacios]);
	}
	public function destroy(Request $request){
	  	$tipo = $request->input('tipo');
	  	DB::delete('delete from espacios where tipo = ?',[$tipo]);
	  	echo "Record deleted successfully.<br/>";
	  	echo '<a href = "/borrarEspacio">Click Here</a> to go back.';
	}

	//*-----------------------------------------------------------------
	public function index(){
	  	$espacios  = Espacio::all();
	  	return view('infraestructura/espacio/espacio_edit_view',['espacios'=>$espacios]);
	}
	public function show($id) {
		$espacios  = Espacio::where('tipo', $id)->first();
	  	return view('infraestructura/espacio/espacio_update',['espacios'=>$espacios]);
	}
	public function edit(Request $request, $id) {
        $tipo = $request->input('tipo');
		$superficie= $request->input('superficie');
		$cantidad= $request->input('cantidad');
		$clase = $request->input('clase');

		Espacio::where('tipo', $id)->update([
            'tipo' => $tipo, 'superficie' => $superficie,'cantidad'=>$cantidad,
            'clase' => $clase,
        ]);
	  	echo "Record updated successfully.<br/>";
	  	echo '<a href = "/editarEspacio">Click Here</a> to go back.';
	}
}
