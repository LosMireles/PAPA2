<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use File;

use App\TecnicoAcademico;
use App\Software;
use App\Equipo;

use Storage;
use Response;

class TecnicoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($url_regreso = null){
        return view('tecnico_academico/create')
        ->with([
            'url_previous' => url()->previous(),
            'url_regreso' => $url_regreso
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $url_regreso = null)
    {
        $request->validate($this->rules());

        $tecnico = new TecnicoAcademico;

        $tecnico->nombre = $request->nombre;
        $tecnico->grado_academico = $request->grado;
        $tecnico->certificados = $request->certificados;
        $tecnico->anios_exp = $request->exp;

        //$document = $request->file('curriculo');

        /*if($document){
            $tecnico->curriculum = $document->getClientOriginalName();
            $document->move(public_path('/curriculos'), $document->getClientOriginalName());
        }*/

        $tecnico->save();

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento agregado exitosamente');
        }else{
            return redirect(url('/inciso_9_2_14'))
                ->with('status', 'Elemento agregado exitosamente');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $url_regreso = null)
    {
        $tecnico = TecnicoAcademico::where('id', $id)->first();
        return view('tecnico_academico/edit')
            ->with([
                'tecnico'       => $tecnico,
                'url_previous'  => url()->previous(),
                'url_regreso'   => $url_regreso
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $url_regreso = null)
    {
        $tecnico = TecnicoAcademico::where('id',$id)->first();
        $request->validate($this->rules($tecnico->nombre));

        $nombre             = $request->nombre;
        $grado_academico    = $request->grado;
        $certificados       = $request->certificados;
        $exp                = $request->exp;

        $tecnico->update([
            'nombre'            => $nombre,
            'grado_academico'   => $grado_academico,
            'certificados'      => $certificados,
            'anios_exp'         => $exp,
        ]);

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento actualizado exitosamente');
        }else{
            return redirect(url('/inciso_9_2_14'))
                ->with('status', 'Elemento actualizado exitosamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $url_regreso = null){
        $tecnico = TecnicoAcademico::where('id', $id)->first();
        if(!$tecnico){
            //$mensaje = "No existe software con nombre: ".$nombre;
            //return view('general/error',['mensaje'=>$mensaje]);
        }
        $tecnico->delete();
        echo "Elemento borrado exitosamente!";

        if($url_regreso != null){
            return redirect(url($url_regreso))
                ->with('status', 'Elemento borrado exitosamente');
        }else{
            return redirect(url('/inciso_9_2_14'))
                ->with('status', 'Elemento borrado exitosamente');
        }
    }

    public function rules($nombre = null){
        return [
            'nombre'       => ['required',
                                Rule::unique('tecnicoacademico')->ignore($nombre, 'nombre')],
        ];
    }

    public function ver_curriculo($id){
        $tecnico = TecnicoAcademico::where('id', $id)->first();
        return response()->file(public_path('curriculos/' . $tecnico->curriculum));
    }
}
