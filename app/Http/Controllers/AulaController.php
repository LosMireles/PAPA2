<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aula;

class AulaController extends Controller
{
    public function index(){
      $aulas  = Aula::all();

      return view('infraestructura.aulas.index')
          ->with(['aulas'=>$aulas]);
    }

    //----------------------------------------------------------------
	public function create(){
	    return view('infraestructura.aulas.create');
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $aula = new Aula;

        $aula->Tipo           = $request->Tipo;
		$aula->CantidadEquipo = $request->CantidadEquipo;
		$aula->CantidadAV     = $request->CantidadAV;
		$aula->Capacidad      = $request->Capacidad;

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
		$aula->Pizarron     = $request->Pizarron;
		$aula->Illuminacion = $request->Illuminacion;
		$aula->AislamientoR = $request->AislamientoR;
		$aula->Ventilacion  = $request->Ventilacion;
		$aula->Temperatura  = $request->Temperatura;
		$aula->Espacio      = $request->Espacio;
		$aula->Mobilario    = $request->Mobilario;
		$aula->Conexiones   = $request->Conexiones;

        $aula->save();

		echo "Elemento insertado exitosamente!";
        return redirect()->action('AulaController@index');
    }

	//-----------------------------------------------------------
	public function edit($tipo) {
		$aula  = Aula::where('Tipo', $tipo)->first();

        return view('infraestructura.aulas.edit')
            ->with(['aula'=>$aula]);
	}

	//-----------------------------------------------------------
	public function update(Request $request, $tipo) {
	  	$tipo_nuevo     = $request->Tipo;
		$CantidadEquipo = $request->CantidadEquipo;
		$CantidadAV     = $request->CantidadAV;
		$Capacidad      = $request->Capacidad;

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

		$Pizarron     = $request->Pizarron;
		$Illuminacion = $request->Illuminacion;
		$AislamientoR = $request->AislamientoR;
		$Ventilacion  = $request->Ventilacion;
		$Temperatura  = $request->Temperatura;
		$Espacio      = $request->Espacio;
		$Mobilario    = $request->Mobilario;
		$Conexiones   = $request->Conexiones;

		Aula::where('Tipo', $tipo)->update(['Tipo'           => $tipo_nuevo,
											'CantidadEquipo' => $CantidadEquipo,
											'CantidadAV'     => $CantidadAV,
											'Capacidad'      => $Capacidad,
											'SillasPaleta'   => $SillasPaleta,
											'MesasTrabajo'   => $MesasTrabajo,
											'Isotopica'      => $Isotopica,
											'Estrado'        => $Estrado,
											'Pizarron'       => $Pizarron,
											'Illuminacion'   => $Illuminacion,
											'AislamientoR'   => $AislamientoR,
											'Ventilacion'    => $Ventilacion,
											'Temperatura'    => $Temperatura,
											'Espacio'        => $Espacio,
											'Mobilario'      => $Mobilario,
											'Conexiones'     => $Conexiones]);

		echo "Elemento insertado exitosamente!";
        return redirect()->action('AulaController@index');
	}

	//--------------------------------------------------------------
	public function destroy($tipo){
        $aula = Aula::where('Tipo', $tipo)->first();
        if(!$aula){
            $mensaje = "No existe aula con Tipo: ".$tipo;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $aula->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('AulaController@index');
	}

	//--------------------------------------------------------------

}

