<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Auditorio;

class AuditorioController extends Controller
{
    public function index(){
        $auditorios = Auditorio::all();

        return view('infraestructura.auditorios.index')
            ->with(['auditorios' => $auditorios]);
     }

    //----------------------------------------------------------------
    public function create(){
        return view('infraestructura.auditorios.create');
    }

    //----------------------------------------------------------------
    public function dummie(){
        dummieheader("Location: http://127.0.0.1:8000/insertarAuditorio?tipo=".urlencode(""));
        die();
    }

    //----------------------------------------------------------------
    public function store(Request $request){
        $auditorio = new Auditorio;

        $auditorio->Tipo               = $request->Tipo;
		$auditorio->CantidadEquipo     = $request->CantidadEquipo;
		$auditorio->CantidadAV         = $request->CantidadAV;
        $auditorio->Capacidad          = $request->Capacidad;
		$auditorio->CantidadSanitarios = $request->CantidadSanitarios;

        $auditorio->save();

		echo "Elemento insertado exitosamente!";
        return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function edit($id) {
        $auditorios  = Auditorio::where('IdAuditorio', $id)->first();

        return view('infraestructura.auditorios.edit')
            ->with(['auditorios'=>$auditorios]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $id) {
        $auditorio->Tipo               = $request->Tipo;
        $auditorio->CantidadEquipo  = $request->CantidadEquipo;
        $auditorio->CantidadAV         = $request->CantidadAV;
        $auditorio->Capacidad          = $request->Capacidad;
        $auditorio->CantidadSanitarios = $request->CantidadSanitarios;

        Auditorio::where('IdAuditorio', $id)->update([
            'Tipo'               => $Tipo,
            'CantidadEquipo'     => $CantidadEquipo,
            'CantidadAV'         => $CantidadAV,
            'Capacidad'          => $Capacidad,
            'CantidadSanitarios' => $CantidadSanitarios
        ]);

		echo "Elemento editado exitosamente!";
        return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function destroy(Request $request){
	  	$Tipo = $request->Tipo;

        $auditorio = auditorio::where('Tipo', $Tipo)->first();
        if(!$auditorio){
            $mensaje = "No existe auditorio con tipo: ".$Tipo;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $auditorio->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('AuditorioController@index');
    }

}
