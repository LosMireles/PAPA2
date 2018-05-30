<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Asesoria;
use App\Aula;

class AsesoriaController extends Controller
{
    public function index()
    {
        return redirect("/");
    }

    //----------------------------------------------------------------
    public function create($url_regreso = null)
    {
        $aulas = Aula::all();
        return view('infraestructura.asesorias.create')
            ->with([
                'aulas'         => $aulas,
                'url_previous'  => url()->previous(),
                'url_regreso'   => $url_regreso,
            ]);
    }

    //----------------------------------------------------------------
    public function store(Request $request, $url_regreso = null)
    {
      $request->validate($this->rules());

      $asesoria = new Aula;
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/asesorias/' . $request->Tipo, $foto->getClientOriginalName());
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

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento agregado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento agregado exitosamente');
        }
    }

    //----------------------------------------------------------------
    public function edit($tipo, $url_regreso = null) {
      $asesoria  = Asesoria::where('Tipo', $tipo)->first();

      return view('infraestructura.asesorias.edit')
          ->with([
              'asesoria'    => $asesoria,
              'url_previous'=> url()->previous(),
              'url_regreso' => $url_regreso
          ]);
    }

    //----------------------------------------------------------------
    public function update(Request $request, $tipo, $url_regreso = null) {
        $request->validate($this->rules($tipo));

        if ($request->hasFile('Fotografias')) {
          foreach($request->Fotografias as $foto){
            $foto->storeAs('infraestructura/asesorias/' . $request->Tipo, $foto->getClientOriginalName());
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

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
    }

    //----------------------------------------------------------------
    public function destroy($tipo, $url_regreso = null){

        Storage::deleteDirectory('infraestructura/asesorias/'. $tipo . '/');
        $asesoria = Asesoria::where('Tipo', $tipo)->first();
        if(!$asesoria){
          $mensaje = "No existe asesoria con tipo: ".$tipo;
          return view('general/error')
              ->with(['mensaje' => $mensaje]);
        }
        $asesoria->delete();

        if($url_regreso != null){
          return redirect(url($url_regreso))
              ->with('status', 'Elemento borrado exitosamente');
        }else{
          return redirect(url('/'))
              ->with('status', 'Elemento borrado exitosamente');
        }
    }

    //----------------------------------------------------------------
	public function rules($tipo = null){
        return [
            'Tipo'      => ['required',
                            Rule::unique('asesorias')->ignore($tipo, 'Tipo')],
            'InicioDia' => 'required|date',
            'FinDia'    => 'required|date',
            'Limpieza'  => 'required|integer|min:1|max:5',
            'Materia'   => 'required|alpha'
        ];
    }

    public function viewImg($tipo){
      return view('infraestructura.asesorias.viewImg')->with(['tipo' => $tipo]);
    }

    public function guardarImg(Request $request, $tipo){
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/asesorias/' . $tipo, $foto->getClientOriginalName());
        }
      }
      return redirect('/asesorias/'. $tipo .'/viewImg')->with(['tipo' => $tipo]);
    }

    public function borrarImg($tipo, $imagen)
    {
      $dirImagen = 'infraestructura/asesorias/' . $tipo . '/' . $imagen;
      Storage::delete($dirImagen);
      return redirect('/asesorias/'. $tipo .'/viewImg')->with(['tipo' => $tipo]);
    }
}
