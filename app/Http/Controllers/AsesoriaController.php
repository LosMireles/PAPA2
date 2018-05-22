<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Asesoria;

class AsesoriaController extends Controller
{
    public function index()
    {
        $asesorias = Asesoria::all();

        return view('infraestructura.asesorias.index')
            ->with(['asesorias' => $asesorias]);
    }

    //----------------------------------------------------------------
    public function create()
    {
        return view('infraestructura.asesorias.create');
    }

    //----------------------------------------------------------------
    public function store(Request $request)
    {
      $asesoria = new Asesoria;
      if ($request->hasFile('Fotografias')) {
        if ($request->file('Fotografias')->isValid()) {
          $request->Fotografias->storeAs('infraestructura/asesorias/' . $request->Tipo,
                                          $request->Fotografias->getClientOriginalName());
        }
      }


        $asesoria->Tipo       = $request->Tipo;
		$asesoria->InicioHora = $request->InicioHora;
		$asesoria->FinHora    = $request->FinHora;
        $asesoria->InicioDia  = $request->InicioDia;
		$asesoria->FinDia     = $request->FinDia;
        $asesoria->Materia    = $request->Materia;
        $asesoria->espacio_id = $request->espacio_id;

      $asesoria->save();

	    echo "Elemento insertado exitosamente!";
      return redirect()->action('AsesoriaController@index');
    }

    //----------------------------------------------------------------
    public function edit($tipo) {
      $asesoria  = Asesoria::where('Tipo', $tipo)->first();
      return view('infraestructura.asesorias.edit')
          ->with(['asesoria'=>$asesoria]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $tipo) {
      if ($request->hasFile('Fotografias')) {
        if ($request->file('Fotografias')->isValid()) {
          $request->Fotografias->storeAs('infraestructura/asesorias/' . $request->Tipo,
                                          $request->Fotografias->getClientOriginalName());
        }
      }
        $tipo_nuevo = $request->Tipo;
		$InicioHora = $request->InicioHora;
		$FinHora    = $request->FinHora;
        $InicioDia  = $request->InicioDia;
		$FinDia     = $request->FinDia;
        $Materia    = $request->Materia;
        $espacio_id = $request->espacio_id;

        Asesoria::where('Tipo', $tipo)->update([
            'Tipo'       => $tipo_nuevo,
            'InicioHora' => $InicioHora,
            'FinHora'    => $FinHora,
            'InicioDia'  => $InicioDia,
            'FinDia'     => $FinDia,
            'Materia'    => $Materia,
            'espacio_id' => $espacio_id
        ]);

		echo "Elemento editado exitosamente!";
        return redirect()->action('AsesoriaController@index');
    }

    //----------------------------------------------------------------
    public function destroy($tipo){

      Storage::deleteDirectory('infraestructura/asesorias/'. $tipo . '/');
      $asesoria = Asesoria::where('Tipo', $tipo)->first();
      if(!$asesoria){
          $mensaje = "No existe asesoria con tipo: ".$tipo;
          return view('general/error')
              ->with(['mensaje' => $mensaje]);
      }
      $asesoria->delete();

      echo "Elemento borrado exitosamente!";
      return redirect()->action('AsesoriaController@index');
    }

    //----------------------------------------------------------------
	public function rules(){
        return [
            'Tipo'      => 'required|unique:asesorias|alpha_dash',
            'InicioDia' => 'required|date',
            'FinDia'    => 'required|date',
            'Limpieza'  => 'required|integer|min:1|max:5',
            'Materia'   => 'required|alpha'
        ];
    }

    public function viewImg($tipo){
      return view('infraestructura.asesorias.viewImg')->with(['tipo' => $tipo]);
    }
}
