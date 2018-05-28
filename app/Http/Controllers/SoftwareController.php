<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Software;
use App\Equipo;
use App\Asignatura;

class SoftwareController extends Controller {

    private $clases = ["Lenguaje", "Case", "Manejador BD", "Paqueteria", "Otro"];

    public function index(){
        $softwares  = Software::all();
        return view('equipamiento.softwares.index')
            ->with('softwares', $softwares);
    }

    //----------------------------------------------------------------
    public function create(){
        //$equipos = Equipo::all();
        //$asignaturas = Asignatura::all();
        return view('equipamiento.softwares.create')
            ->with([
                    //'equipos'     => $equipos,
                    //'asignaturas' => $asignaturas,
                'clases'      => $this->clases,
                'url_previous'=> url()->previous()
            ]);
	}

    //----------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate($this->rules());

        $software                 = new Software;

        $software->nombre         = $request->nombre;
		$software->version        = $request->version;
		$software->clase          = $request->clase;
		$software->disponibilidad = $request->disponibilidad;
        $equipos                  = $request->equipo;
        $asignaturas              = $request->asignatura;

        $software->save();

        //if(!empty($equipos)){
            //foreach($equipos as $serial){
                //$equipoId = DB::table('equipos')->where('serial', $serial)->value('id');
                //$software->equipos()->attach($equipoId);
            //}
        //}

        //if(!empty($asignaturas)){
            //foreach($asignaturas as $nombre){
                //$asignaturaId = DB::table('asignaturas')->where('nombre', $nombre)->value('id');
                //$software->asignaturas()->attach($asignaturaId);
            //}
        //}

		echo "Elemento insertado exitosamente!";
        return redirect($request->url_previous)->with('status', 'Elemento agregado exitosamente');
    }

	//*-----------------------------------------------------------------
	public function edit($nombre) {
        //$equipo_softwares      = DB::table('equipo_software')->get();
        //$asignaturas_softwares = DB::table('asignatura_software')->get();
		$software              = Software::where('nombre', $nombre)->first();
	  	$equipos               = Equipo::all();
	  	$asignaturas           = asignatura::all();

	  	return view('equipamiento.softwares.edit')
	  	    ->with(['software'             => $software,
                    'equipos'              => $equipos,
                    'asignaturas'          => $asignaturas,
                    'clases'               => $this->clases,
                    //'equipo_softwares'     => $equipo_softwares,
                    //'asignaturas_softwares' => $asignaturas_softwares
                    'url_previous'         => url()->previous()
                ]);
	}

	//*-----------------------------------------------------------------
    public function update(Request $request, $nombre){
        $request->validate($this->rules($nombre));

        $software = Software::where('nombre', $nombre)->first();

        $data = [
            'nombre'         => $request->nombre,
            'version'        => $request->version,
            'clase'          => $request->clase,
            'disponibilidad' => $request->disponibilidad
        ];
        $software->update($data);

		echo "Elemento editado exitosamente!";
        return redirect($request->url_previous)
            ->with('status', 'Elemento actualizado con exito');
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
        return redirect()->back()
            ->with('status', 'Elemento borrado exitosamente');
    }

    //Valida los datos de los formularios create y edit
    public function rules($nombre = null){
        return [
                'nombre'         => ['required',
                                     Rule::unique('softwares')->ignore($nombre, 'nombre')],
               ];
    }
}
