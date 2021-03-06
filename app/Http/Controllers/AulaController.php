<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Aula;
use App\Equipo;

class AulaController extends Controller
{
    public function index(){
        return redirect("/");
    }

    //----------------------------------------------------------------
	public function create($url_regreso = null){
    	$calificaciones = [1, 2, 3, 4];
        return view('infraestructura.aulas.create')
            ->with([
                'calificaciones' => $calificaciones,
                'url_previous'   => url()->previous(),
                'url_regreso'    => $url_regreso
            ]);
	}

    //----------------------------------------------------------------
	public function create_asesoria(){
		return view('infraestructura/asesorias/create');
	}

    //----------------------------------------------------------------
    public function store(Request $request, $url_regreso = null)
    {
        $request->validate($this->rules());

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

        $audAux = Aula::where('nombre', $request->nombre)->first();
        $id = $audAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/aulas/' . $id, $foto->getClientOriginalName());
          }
        }

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento agregado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento agregado exitosamente');
        }
    }

	//-----------------------------------------------------------
	public function edit($nombre, $url_regreso = null) {
        $calificaciones = [1, 2, 3, 4];
        $aula           = Aula::where('nombre', $nombre)->first();

        return view('infraestructura.aulas.edit')
            ->with(['aula'           => $aula,
                    'calificaciones' => $calificaciones,
                    'url_previous' => url()->previous(),
                    'url_regreso'    => $url_regreso
                ]);
	}

	//-----------------------------------------------------------
	public function update(Request $request, $nombre, $url_regreso = null) {
        $request->validate($this->rules($nombre));

        $audAux = Aula::where('nombre', $nombre)->first();
        $id = $audAux->id;
        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/aulas/' . $id, $foto->getClientOriginalName());
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

        Aula::where('nombre', $nombre)->update([
            'nombre'            => $nombre_nuevo,
            'superficie'        => $superficie,
            'capacidad'         => $capacidad,
            'sillas_paleta'     => $sillas_paleta,
            'mesas_trabajo'     => $mesas_trabajo,
            'isotopica'         => $isotopica,
            'estrado'           => $estrado,
            'pizarron'          => $pizarron,
            'iluminacion'       => $iluminacion,
            'aislamiento_ruido' => $aislamiento_ruido,
            'ventilacion'       => $ventilacion,
            'temperatura'       => $temperatura,
            'espacio'           => $espacio,
            'mobilario'         => $mobilario,
            'conexiones'        => $conexiones,
            'asesoria'          => $asesoria
        ]);

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
	}

	//--------------------------------------------------------------
	public function destroy($nombre, $url_regreso = null){
        # Borra los archivos subidos a la carpeta del objeto
        $aula = Aula::where('nombre', $nombre)->first();
        Storage::deleteDirectory('infraestructura/aulas/'. $aula->id . '/');

        $aula = Aula::where('nombre', $nombre)->first();
        if(!$aula){
            $mensaje = "No existe aula con nombre: ".$nombre;
            return view('general/error')
                ->with(['mensaje' => $mensaje]);
        }
        $aula->delete();

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento borrado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento borrado exitosamente');
        }
	}

	//--------------------------------------------------------------
    public function rules($nombre = null){
        return [
            'nombre' => ['required',
                     Rule::unique('aulas')->ignore($nombre, 'nombre')]
        ];
    }
	//--------------------------------------------------------------

  public function viewImg($nombre, $uurl){
      return view('infraestructura.aulas.viewImg')->with([
          'nombre' => $nombre,
          'uurl' => $uurl
      ]);
  }

  public function guardarImg(Request $request, $nombre, $uurl){
    $audAux = Aula::where('nombre', $nombre)->first();
    $id = $audAux->id;
    if ($request->hasFile('Fotografias')) {
      foreach($request->Fotografias as $foto){
        $foto->storeAs('infraestructura/aulas/' . $id, $foto->getClientOriginalName());
      }
    }
    return redirect('/aulas/'. $nombre .'/viewImg/'.$uurl)->with(['nombre' => $nombre, 'uurl'=>$uurl]);
  }

  public function borrarImg($nombre, $uurl, $imagen)
  {
    $audAux = Aula::where('nombre', $nombre)->first();
    $id = $audAux->id;
    $dirImagen = 'infraestructura/aulas/' . $id . '/' . $imagen;
    Storage::delete($dirImagen);
    return redirect('/aulas/'. $nombre .'/viewImg/'. $uurl)->with(['nombre' => $nombre, 'uurl'=>$uurl]);
  }

    public function relacionar_equipos($id, $url_regreso = null){
        $aula                  = Aula::where('id', $id)->first();
        $equipos_computo       = Equipo::where('tipo', 'Computo')
                                       ->get();
        $equipos_audiovisuales = Equipo::where('tipo', 'Audiovisual')
                                       ->get();

        return view('infraestructura.aulas.relacionar_aula_equipo')
            ->with([
                'aula'                  => $aula,
                'equipos_computo'       => $equipos_computo,
                'equipos_audiovisuales' => $equipos_audiovisuales,
                'url_previous'          => url()->previous(),
                'url_regreso'           => $url_regreso
            ]);
    }

    public function relacionar_equipos_post(Request $request, $id, $url_regreso = null){
        //desenlaza todos los equipos con el aula en cuestion y vuelve a
        //enlazarlos si es necesario
        $equipos = Equipo::where('aula_id', $id)->get();
        if(!empty($equipos)){
            foreach($equipos as $equipo){
                $equipo->update([
                    'aula_id' => null
                ]);
            }
        }

        if($request->computos){
            foreach($request->computos as $serial){
                $equipo = Equipo::where('serial', $serial)->update([
                    'aula_id' => $id
                ]);
            }
        }

        if($request->audiovisuales){
            foreach($request->audiovisuales as $serial){
                $equipo = Equipo::where('serial', $serial)->update([
                    'aula_id' => $id
                ]);
            }
        }

        return redirect()->action('Inciso9_1_8Controller@index')
            ->with('status', 'Vinculo actualizado exitosamente');
    }
}
