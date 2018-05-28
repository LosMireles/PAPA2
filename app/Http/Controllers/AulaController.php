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
            ->with([
                'calificaciones' => $calificaciones,
                'url_previous' => url()->previous()
            ]);
	}

	//----------------------------------------------------------------

	public function create_asesoria(){
		return view('infraestructura/asesorias/create');
	}
  //----------------------------------------------------------------
  public function store(Request $request)
  {
        $request->validate($this->rules());

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/aulas/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

        $aula = new Aula;

        $aula->nombre            = $request->nombre;
        $aula->superficie        = $request->superficie;
        $aula->capacidad         = $request->capacidad;

        $aula->sillas_paleta     = $request->sillas_paleta;
        $aula->mesas_trabajo     = $request->mesas_trabajo;
        $aula->isotopica         = $request->isotopica;
        $aula->estrado           = $request->estrado;
        $aula->asesoria          = $request->asesoria;

		$aula->pizarron          = $request->pizarron;
		$aula->iluminacion       = $request->iluminacion;
		$aula->aislamiento_ruido = $request->aislamiento_ruido;
		$aula->ventilacion       = $request->ventilacion;
		$aula->temperatura       = $request->temperatura;
		$aula->espacio           = $request->espacio;
		$aula->mobilario         = $request->mobilario;
		$aula->conexiones        = $request->conexiones;

        $aula->save();

        #echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento agregado exitosamente');
    }

	//-----------------------------------------------------------
	public function edit($nombre) {

        $calificaciones = [1, 2, 3, 4];
        $aula           = Aula::where('nombre', $nombre)->first();

        return view('infraestructura.aulas.edit')
            ->with(['aula'           => $aula,
                    'calificaciones' => $calificaciones,
                    'url_previous' => url()->previous()
                ]);
	}

	//-----------------------------------------------------------
	public function update(Request $request, $nombre) {
        //$request->validate($this->rules($nombre));

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/aulas/' . $request->nombre, $foto->getClientOriginalName());
          }
        }

	  	$nombre_nuevo      = $request->nombre;
        $superficie        = $request->superficie;
		$capacidad         = $request->capacidad;
		$sillas_paleta     = $request->sillas_paleta;
		$mesas_trabajo     = $request->mesas_trabajo;
		$isotopica         = $request->isotopica;
		$estrado           = $request->estrado;
		$asesoria          = $request->asesoria;
		$pizarron          = $request->pizarron;
		$iluminacion       = $request->iluminacion;
		$aislamiento_ruido = $request->aislamiento_ruido;
		$ventilacion       = $request->ventilacion;
		$temperatura       = $request->temperatura;
		$espacio           = $request->espacio;
		$mobilario         = $request->mobilario;
		$conexiones        = $request->conexiones;

		Aula::where('nombre', $nombre)->update(['nombre'         => $nombre_nuevo,
                            'superficie'                         => $superficie,
							'capacidad'                          => $capacidad,
							'sillas_paleta'                      => $sillas_paleta,
							'mesas_trabajo'                      => $mesas_trabajo,
							'isotopica'                          => $isotopica,
							'estrado'                            => $estrado,
							'pizarron'                           => $pizarron,
							'iluminacion'                        => $iluminacion,
							'aislamiento_ruido'                  => $aislamiento_ruido,
							'ventilacion'                        => $ventilacion,
							'temperatura'                        => $temperatura,
							'espacio'                            => $espacio,
							'mobilario'                          => $mobilario,
							'conexiones'                         => $conexiones,
							'asesoria'                           => $asesoria]);

		echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
	}

	//--------------------------------------------------------------
	public function destroy($nombre){

    # Borra los archivos subidos a la carpeta del objeto
    Storage::deleteDirectory('infraestructura/aulas/'. $nombre . '/');

    $aula = Aula::where('nombre', $nombre)->first();
    if(!$aula){
        $mensaje = "No existe aula con nombre: ".$nombre;
        return view('general/error')
            ->with(['mensaje' => $mensaje]);
    }
    $aula->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->back()
            ->with('status', 'Elemento borrado exitosamente');
	}

	//--------------------------------------------------------------
    public function rules($nombre = null){
        return [
            'nombre'           => ['required',
                                 Rule::unique('aulas')->ignore($nombre, 'nombre')],

            'capacidad'      => 'required|integer',

            'pizarron'     => 'required|integer|min:1|max:4',
            'iluminacion' => 'required|integer|min:1|max:4',
            'aislamiento_ruido' => 'required|integer|min:1|max:4',
            'ventilacion'  => 'required|integer|min:1|max:4',
            'temperatura'  => 'required|integer|min:1|max:4',
            'espacio'      => 'required|integer|min:1|max:4',
            'mobilario'    => 'required|integer|min:1|max:4',
            'conexiones'   => 'required|integer|min:1|max:4'
        ];
    }
	//--------------------------------------------------------------

  public function viewImg($nombre){
    return view('infraestructura.aulas.viewImg')->with(['nombre' => $nombre]);
  }

  public function guardarImg(Request $request, $nombre){
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/aulas/' . $nombre, $foto->getClientOriginalName());
      }
    }
    return redirect('/aulas/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

  public function borrarImg($nombre, $imagen)
  {
    $dirImagen = 'infraestructura/aulas/' . $nombre . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/aulas/'. $nombre .'/viewImg')->with(['nombre' => $nombre]);
  }

}
