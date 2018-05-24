<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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
    $calificaciones = [1, 2, 3, 4];
        return view('infraestructura.aulas.create')
            ->with(['calificaciones' => $calificaciones]);
	}

  //----------------------------------------------------------------
  public function store(Request $request)
  {
    $request->validate($this->rules());

    if ($request->hasFile('Fotografias')) {
      if ($request->file('Fotografias')->isValid()) {
        $request->Fotografias->storeAs('infraestructura/aulas/' . $request->Tipo,
                                        $request->Fotografias->getClientOriginalName());
      }
    }

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

        #echo "Elemento insertado exitosamente!";
        return redirect()->action('AulaController@index');
    }

	//-----------------------------------------------------------
	public function edit($tipo) {

        $calificaciones = [1, 2, 3, 4];
		$aula  = Aula::where('Tipo', $tipo)->first();

        return view('infraestructura.aulas.edit')
            ->with(['aula'           => $aula,
                    'calificaciones' => $calificaciones]);
	}

	//-----------------------------------------------------------
	public function update(Request $request, $tipo) {
        $request->validate($this->rules($tipo));

        if ($request->hasFile('Fotografias')) {
          if ($request->file('Fotografias')->isValid()) {
            $request->Fotografias->storeAs('infraestructura/aulas/' . $request->Tipo,
                                            $request->Fotografias->getClientOriginalName());
          }
        }
	  	$tipo_nuevo     = $request->Tipo;
		$CantidadEquipo = $request->CantidadEquipo;
		$CantidadAV     = $request->CantidadAV;
		$Capacidad      = $request->Capacidad;
        $espacio_id     = $request->espacio_id;

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
                                            'Conexiones'     => $Conexiones,
                                            'espacio_id'     => $espacio_id]);

		#echo "Elemento insertado exitosamenteeee!";
        return redirect()->action('AulaController@index');
	}

	//--------------------------------------------------------------
	public function destroy($tipo){

    # Borra los archivos subidos a la carpeta del objeto
    Storage::deleteDirectory('infraestructura/aulas/'. $tipo . '/');

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
    public function rules($tipo = null){
        return [
            'Tipo'           => ['required',
                                 Rule::unique('aulas')->ignore($tipo, 'Tipo')],
            'CantidadEquipo' => 'required|integer',
            'CantidadAV'     => 'required|integer',
            'Capacidad'      => 'required|integer',

            'Pizarron'     => 'required|integer|min:1|max:4',
            'Illuminacion' => 'required|integer|min:1|max:4',
            'AislamientoR' => 'required|integer|min:1|max:4',
            'Ventilacion'  => 'required|integer|min:1|max:4',
            'Temperatura'  => 'required|integer|min:1|max:4',
            'Espacio'      => 'required|integer|min:1|max:4',
            'Mobilario'    => 'required|integer|min:1|max:4',
            'Conexiones'   => 'required|integer|min:1|max:4'
        ];
    }
	//--------------------------------------------------------------

  public function viewImg($tipo){
    return view('infraestructura.aulas.viewImg')->with(['tipo' => $tipo]);
  }

  #public function deleteImg($image){
  #  Storage::delete($image);
  #  return redirect()->action('AulaController@viewImg');
  #}
}

