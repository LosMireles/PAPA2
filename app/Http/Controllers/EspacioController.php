<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Espacio;
use App\Curso;

class EspacioController extends Controller {

    private $clases = ["Aula", "Cubiculo", "Sanitario", "Asesoria", "Auditorio"];

    public function index(){
        $espacios = Espacio::all();

        return view('infraestructura.espacios.index')
            ->with(['espacios' => $espacios]);
    }
    //----------------------------------------------------------------
    public function create(){
        $espacios   = Espacio::all();
        $cursos     = Curso::all();

    return view('infraestructura.espacios.create')
        ->with(['espacios' => $espacios,
                'cursos'   => $cursos,
                'clases'   => $this->clases]);
  }

    //----------------------------------------------------------------
  public function store(Request $request)
  {
    $request->validate($this->rules());

    $espacio             = new Espacio;

    $espacio->tipo       = $request->tipo;
		$espacio->superficie = $request->superficie;
		$espacio->cantidad   = $request->cantidad;
		$espacio->clase      = $request->clase;
    $cursos              = $request->cursos;

    $espacio->save();

    if(!empty($cursos)){
        foreach($cursos as $nombreCurso){
            $cursoId = DB::table('cursos')->where('nombre', $nombreCurso)->value('id');
            $espacio->cursos()->attach($cursoId);
        }
    }

    $clase = $request->clase;
    /********************************************************************************************
    ***********************************************************************************************/
		if($clase == 'Aula')
		{
      return view('infraestructura.aulas.create')
          ->with(['espacio_id'   => $espacio->id,
                  'espacio_tipo' => $espacio->tipo]);
		}
		if($clase == 'Cubiculo')
		{
      return view('infraestructura.cubiculos.create')
          ->with(['espacio_id'   => $espacio->id,
                  'espacio_tipo' => $espacio->tipo]);
		}
		if($clase == 'Sanitario')
		{
      return view('infraestructura.sanitarios.create')
          ->with(['espacio_id'   => $espacio->id,
                  'espacio_tipo' => $espacio->tipo]);
		}
		if($clase == 'Asesoria')
		{
      return view('infraestructura.asesorias.create')
          ->with(['espacio_id'   => $espacio->id,
                  'espacio_tipo' => $espacio->tipo]);
		}
		if($clase == 'Auditorio')
		{
      return view('infraestructura.auditorios.create')
          ->with(['espacio_id'   => $espacio->id,
                  'espacio_tipo' => $espacio->tipo]);
		}

	  echo "Elemento insertado exitosamente!";
    return redirect()->action('EspacioController@index');
  }

    //----------------------------------------------------------------
	public function edit($tipo) {
		$espacio       = Espacio::where('tipo', $tipo)->first();
    $cursos        = Curso::all();
    $curso_espacio = DB::table('curso_espacio')->get();

    return view('infraestructura.espacios.edit')
        ->with(['espacio'       => $espacio,
                'cursos'        => $cursos,
                'curso_espacio' => $curso_espacio,
                'cursos'        => $this->clases]);
	}

    //----------------------------------------------------------------
	public function update(Request $request, $tipo) {
        $request->validate($this->rules($tipo));

        $tipo_nuevo   = $request->tipo;
		$superficie   = $request->superficie;
		$cantidad     = $request->cantidad;
		$clase        = $request->clase;
        $nombreCursos = $request->cursos;

        if(!empty($nombreCursos)){
            $idCursos = [];
            foreach($nombreCursos as $nombreCurso){
                $idCursos[] = DB::table('cursos')
                    ->where('nombre', $nombreCurso)->value('id');
            }
        }

        $espacio =Espacio::where('tipo', $tipo)->first();
		$espacio->update([
            'tipo'       => $tipo_nuevo,
            'superficie' => $superficie,
            'cantidad'   => $cantidad,
            'clase'      => $clase
        ]);

    $espacio->cursos()->sync($idCursos);

		echo "Elemento editado exitosamente!";
    return redirect()->action('EspacioController@index');
	}

    //----------------------------------------------------------------
	public function destroy($tipo){
    $espacio = Espacio::where('tipo', $tipo)->first();
    if(!$espacio){
        $mensaje = "No existe espacio con Tipo: ".$tipo;
        return view('general.error')
            ->with(['mensaje' => $mensaje]);
    }
    $espacio->delete();

		echo "Elemento borrado exitosamente!";
    return redirect()->action('EspacioController@index');
	}

	//*-----------------------------------------------------------------
    public function rules($tipo = null){
        return [
            'tipo'       => ['required',
                             Rule::unique('espacios')->ignore($tipo, 'tipo')],
            'superficie' => 'required|integer', //no bueno pero no se como hacerlo mejor
            'cantidad'   => 'required|integer',
            'clase'      => 'required|alpha'
        ];
    }
	//*-----------------------------------------------------------------

}

