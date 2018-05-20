<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TecnicoAcademico;
use App\Software;
use App\Equipo;
use App\Espacio;

class TecnicoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tecnicos = TecnicoAcademico::all();
        return view('tecnico_academico/index',['tecnicos'=>$tecnicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $espacios = Espacio::all();
        $dias_semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
        return view('tecnico_academico/create', ['espacios' => $espacios, 'dias_semana' => $dias_semana]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecnico = new TecnicoAcademico;

        $tecnico->nombre = $request->nombre;
        $tecnico->localizacion = $request->localizacion;
        $tecnico->hora_inicio = $request->hora_inicio;
        $tecnico->hora_termino = $request->hora_termino;
        $tecnico->dia_inicio = $request->dia_inicio;
        $tecnico->dia_termino = $request->dia_termino;

        $document = $request->file('curriculo');

        $tecnico->curriculum = $document->getClientOriginalName();
        $document->move(public_path('/curriculos'), $document->getClientOriginalName());

        $tecnico->save();

        echo "Elemento insertado exitosamente!";
        return redirect()->action('TecnicoAcademicoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $tecnico = TecnicoAcademico::where('id', $id)->first();
        if(!$tecnico){
            $mensaje = "No existe software con nombre: ".$nombre;
            return view('general/error',['mensaje'=>$mensaje]);
        }
        $tecnico->delete();
        echo "Elemento borrado exitosamente!";
        return redirect()->action('TecnicoAcademicoController@index');
    }

    public function ver_curriculo(){
        return view('index');
    }
}
