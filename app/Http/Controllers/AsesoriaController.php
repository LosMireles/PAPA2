<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Asesoria;

class AsesoriaController extends Controller
{
    /**
     *
     */
    public function indexVer()
    {
        //
        $asesorias = Asesoria::all();
        return view('infraestructura/asesoria/asesoria_view',
            ['asesorias' => $asesorias]);
    }
//----------------------------------------------------------------
    public function insertform()
    {
        return view('infraestructura/asesoria/asesoria_create');
    }

	public function dummie(){
		header("Location: http://127.0.0.1:8000/insertarAsesoria?tipo=".urlencode(""));
	  	die();
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $asesoria = new Asesoria;

        $asesoria->Tipo = $request->Tipo;
		$asesoria->InicioHora = $request->InicioHora;
		$asesoria->FinHora = $request->FinHora;
        $asesoria->InicioDia = $request->InicioDia;
		$asesoria->FinDia = $request->FinDia;
        $asesoria->Materia = $request->Materia;

        $asesoria->save();
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertarAsesorias">Click Here</a> to go back.';

    }
//--------------------------------------------------------

    public function indexBorrar(){
        $asesorias  = Asesoria::all();
        return view('infraestructura/asesoria/asesoria_delete',['asesorias'=>$asesorias]);
    }
    public function destroy(Request $request){
        $Tipo = $request->input('Tipo');
        DB::delete('delete from asesorias where Tipo = ?',[$Tipo]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/borrarAsesoria">Click Here</a> to go back.';
    }


//--------------------------------------------------------
    public function indexEditar(){
        $asesorias  = Asesoria::all();
        return view('infraestructura/asesoria/asesoria_edit_view',['asesorias'=>$asesorias]);
    }
    public function show($id) {
          $asesorias  = Asesoria::where('IdAsesoria', $id)->first();
        return view('infraestructura/asesoria/asesoria_update',['asesorias'=>$asesorias]);
    }
    public function edit(Request $request,$id) {
        $asesoria->Tipo = $request->Tipo;
		$asesoria->InicioHora = $request->InicioHora;
		$asesoria->FinHora = $request->FinHora;
        $asesoria->InicioDia = $request->InicioDia;
		$asesoria->FinDia = $request->FinDia;
        $asesoria->Materia = $request->Materia;

        Asesoria::where('IdAsesoria', $id)->update([
            'Tipo' => $Tipo,
            'InicioHora'=>$InicioHora,
            'FinHora'=>$FinHora,
            'InicioDia'=>$InicioDia,
            'FinDia'=>$FinDia,
            'Materia'=>$Materia
        ]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/editarAsesoria">Click Here</a> to go back.';
    }
}
