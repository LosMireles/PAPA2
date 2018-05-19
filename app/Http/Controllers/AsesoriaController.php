<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

        $asesoria->Tipo       = $request->Tipo;
		$asesoria->InicioHora = $request->InicioHora;
		$asesoria->FinHora    = $request->FinHora;
        $asesoria->InicioDia  = $request->InicioDia;
		$asesoria->FinDia     = $request->FinDia;
        $asesoria->Materia    = $request->Materia;

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
        $tipo_nuevo = $request->Tipo;
		$InicioHora = $request->InicioHora;
		$FinHora    = $request->FinHora;
        $InicioDia  = $request->InicioDia;
		$FinDia     = $request->FinDia;
        $Materia    = $request->Materia;

        Asesoria::where('Tipo', $tipo)->update([
            'Tipo'       => $tipo_nuevo,
            'InicioHora' => $InicioHora,
            'FinHora'    => $FinHora,
            'InicioDia'  => $InicioDia,
            'FinDia'     => $FinDia,
            'Materia'    => $Materia
        ]);

		echo "Elemento editado exitosamente!";
        return redirect()->action('AsesoriaController@index');
    }

    //----------------------------------------------------------------
    public function destroy($tipo){
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

}

