<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Curso;
use App\Aula;
class CursoController extends Controller {
    private $licenciaturas = ["LCC", "LM", "Otro"];

    public function index(){
        $cursos = Curso::all();

        return view('infraestructura.cursos.index')
            ->with(['cursos' => $cursos]);
    }

    //----------------------------------------------------------------
	public function create(){
		$aulas	= Aula::all();
        return view('infraestructura.cursos.create')
            ->with([
                'licenciaturas' => $this->licenciaturas,
                'aulas'         => $aulas,
                'url_previous'  => url()->previous()
            ]);
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate($this->rules());

        $curso                = new Curso;

        $curso->nombre        = $request->nombre;
        $curso->periodo       = $request->periodo;
		$curso->no_grupo         = $request->no_grupo;
        $curso->no_estudiantes = $request->no_estudiantes;
        $curso->departamento   = $request->departamento;

        $curso->save();

        /*if(!empty($aulas)){
            foreach($aulas as $nombreAula){
                $espacioId = DB::table('aulas')->where('aula', $nombreAula)->value('id');
                $curso->aulas()->attach($aulaId);
            }
        }*/

		$aulaId = DB::table('aulas')->where('nombre', $request->donde)->value('id');
        $curso->aulas()->attach($aulaId);

		echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)->with('status', 'Elemento agregado exitosamente');
    }

	//-----------------------------------------------------------
	public function edit($nombre) {
		$curso  = Curso::where('nombre', $nombre)->first();
		$aulas	= Aula::all();
	  	//$espacios      = Espacio::all();
        //$curso_espacio = DB::table('curso_espacio')->get();

	  	return view('infraestructura.cursos.edit')
	  	    ->with(['curso'         => $curso,
                    'licenciaturas' => $this->licenciaturas,
                    'aulas'         => $aulas,
                    'url_previous'  => url()->previous()
                ]);
	}

	//-----------------------------------------------------------
    public function update(Request $request, $nombre) {
        //$request->validate($this->rules($nombre));

	  	$nombre_nuevo  = $request->nombre;
	  	$periodo       = $request->periodo;
	  	$no_grupo         = $request->no_grupo;
	  	$no_estudiantes = $request->no_estudiantes;
	  	$departamento  = $request->departamento;


        $idAula = DB::table('aulas')->where('nombre', $request->donde)->value('id');


        $curso = Curso::where('nombre', $nombre)->first();
		$curso->update([
            'nombre'        => $nombre_nuevo,
            'periodo'       => $periodo,
            'no_grupo'         => $no_grupo,
            'no_estudiantes' => $no_estudiantes,
            'departamento'   => $departamento
        ]);

        $curso->aulas()->sync($idAula);

		echo "Elemento editado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
    }

	//-----------------------------------------------------------
    public function destroy($nombre){
        $curso = Curso::where('nombre', $nombre)->first();
        if(!$curso){
            $mensaje = "No existe curso con nombre: ".$nombre;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $curso->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->back()
            ->with('status', 'Elemento borrado exitosamente');
    }

    public function rules($nombre = null){
        return [
            'nombre'        => ['required',
                                Rule::unique('cursos')->ignore($nombre, 'nombre')],
            'periodo'       => 'required|alpha_dash',
            'no_grupo'         => 'required|integer',
            'no_estudiantes' => 'required|integer',
            'departamento'   => 'required|alpha'
        ];
    }
	//*-----------------------------------------------------------------
}

//No se guardar en blade. edit de cursos
/*
	{{--
	<div class="form-group">
		<label for="espacios" class="col-sm-4 control-label" data-toggle="tooltip" title="Espacios donde se imparte el curso">Espacios</label>

		<div class="col-sm-8">
			@foreach($espacios as $espacio)
				<?php $temp = 0; ?>
				@foreach($curso_espacio as $unidad)
					@if($curso->id == $unidad->curso_id && $espacio->id == $unidad->espacio_id)
						<?php $temp = 1; ?>
					@endif
				@endforeach

				@if($temp == 1)
					<input type="checkbox" name="espacios[]" checked value="{{$espacio->tipo}}"> {{$espacio->tipo}} <br>
				@else
					<input type="checkbox" name="espacios[]" value="{{$espacio->tipo}}"> {{$espacio->tipo}} <br>
				@endif
			@endforeach
		</div>
	</div>
	--}
*/
