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
    public function store(Request $request){

      if ($request->hasFile('Fotografias')) {
        if ($request->file('Fotografias')->isValid()) {
          $request->Fotografias->storeAs('infraestructura/auditorios/' . $request->Tipo,
                                          $request->Fotografias->getClientOriginalName());
        }
      }
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
    public function edit($tipo) {
      $auditorio  = Auditorio::where('Tipo', $tipo)->first();

      return view('infraestructura.auditorios.edit')
          ->with(['auditorio'=>$auditorio]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $tipo) {

      if ($request->hasFile('Fotografias')) {
        if ($request->file('Fotografias')->isValid()) {
          $request->Fotografias->storeAs('infraestructura/auditorios/' . $request->Tipo,
                                          $request->Fotografias->getClientOriginalName());
        }
      }
      $tipo_nuevo         = $request->Tipo;
      $CantidadEquipo     = $request->CantidadEquipo;
      $CantidadAV         = $request->CantidadAV;
      $Capacidad          = $request->Capacidad;
      $CantidadSanitarios = $request->CantidadSanitarios;

      Auditorio::where('Tipo', $tipo)->update([
          'Tipo'               => $tipo_nuevo,
          'CantidadEquipo'     => $CantidadEquipo,
          'CantidadAV'         => $CantidadAV,
          'Capacidad'          => $Capacidad,
          'CantidadSanitarios' => $CantidadSanitarios
      ]);

      echo "Elemento editado exitosamente!";
      return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function destroy($tipo){
      Storage::deleteDirectory('infraestructura/auditorios/'. $tipo . '/');
        $auditorio = auditorio::where('Tipo', $tipo)->first();
        if(!$auditorio){
            $mensaje = "No existe auditorio con tipo: ".$tipo;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $auditorio->delete();

	      echo "Elemento borrado exitosamente!";
        return redirect()->action('AuditorioController@index');
    }

    //----------------------------------------------------------------
    public function viewImg($tipo){
      return view('infraestructura.auditorios.viewImg')->with(['tipo' => $tipo]);
    }

}
