<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Software;
use App\Equipo;

class SoftwareController extends Controller {

    private $clases = ["Lenguaje", "Libreria", "Case", "Otro"];

    public function index(){
        $softwares  = Software::all();
        return view('equipamiento.softwares.index')
            ->with('softwares', $softwares);
    }

    //----------------------------------------------------------------
    public function create(){
        $equipos = Equipo::all();
        return view('equipamiento.softwares.create')
            ->with(['equipos'=>$equipos,
                    'clases' => $this->clases]);
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate($this->rules());

        $software                 = new Software;

        $software->nombre         = $request->nombre;
        $software->manualUsuario  = $request->manualUsuario;
		$software->licencia       = $request->licencia;
		$software->disponibilidad = $request->disponibilidad;
		$software->clase          = $request->clase;
        $equipos                  = $request->equipo;

        $software->save();

        if(!empty($equipos)){
            foreach($equipos as $serial){
                $equipoId = DB::table('equipos')->where('serial', $serial)->value('id');
                $software->equipos()->attach($equipoId);
            }
        }

		echo "Elemento insertado exitosamente!";
        return redirect()->action('SoftwareController@index');
    }

	//*-----------------------------------------------------------------
	public function edit($nombre) {
        $equipo_softwares = DB::table('equipo_software')->get();
		$software         = Software::where('nombre', $nombre)->first();
	  	$equipos          = Equipo::all();

	  	return view('equipamiento.softwares.edit')
	  	    ->with(['software'         => $software,
                    'equipos'          => $equipos,
                    'clases'           => $this->clases,
                    'equipo_softwares' => $equipo_softwares]);
	}

	//*-----------------------------------------------------------------
    public function update(Request $request, $nombre){
        $request->validate($this->rules($nombre));

	  	$nombre_nuevo   = $request->nombre;
	  	$manualUsuario  = $request->manualUsuario;
	  	$licencia       = $request->licencia;
	  	$disponibilidad = $request->disponibilidad;
	  	$clase          = $request->clase;
	  	$serialEquipos  = $request->equipos;

        $software = Software::where('nombre', $nombre)->first();

		$software->update([
            'nombre'         => $nombre_nuevo,
            'manualUsuario'  => $manualUsuario,
            'licencia'       => $licencia,
            'disponibilidad' => $disponibilidad,
            'clase'          => $clase
        ]);

        if(!empty($serialEquipos)){
            $idEquipos = [];
            foreach($serialEquipos as $serial){
                $idEquipos[] = Equipo::where('serial', $serial)->value('id');
            }

            $software->equipos()->sync($idEquipos);
        }


		echo "Elemento editado exitosamente!";
        return redirect()->action('SoftwareController@index');
    }

    //*-----------------------------------------------------------------
	public function destroy($nombre){
        $software = Software::where('nombre', $nombre)->first();
        if(!$software){
            $mensaje = "No existe software con nombre: ".$nombre;
            return view('general.error')
                ->with(['mensaje' => $mensaje]);
        }
        $software->delete();

		echo "Elemento borrado exitosamente!";
        return redirect()->action('SoftwareController@index');
	}

    //Valida los datos de los formularios create y edit
    public function rules($nombre = null){
        return [
                'nombre'         => ['required',
                                     Rule::unique('softwares')->ignore($nombre, 'nombre')],
                'manualUsuario'  => 'required|boolean',
                'licencia'       => 'required|alpha_num',
                'disponibilidad' => 'required|alpha_num',
                'clase'          => 'required|alpha_num',
               ];
    }
}

