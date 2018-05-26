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
use App\Espacio;

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
        $tecnicos = TecnicoAcademico::all();
        return view('tecnico_academico/index',['tecnicos'=>$tecnicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('tecnico_academico/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());

        $tecnico = new TecnicoAcademico;

        $tecnico->nombre = $request->nombre;
        $tecnico->grado_academico = $request->grado_academico;
        $tecnico->certificados = $request->certificados;
        $tecnico->anios_exp = $request->anios_exp;

        //$document = $request->file('curriculo');

        /*if($document){
            $tecnico->curriculum = $document->getClientOriginalName();
            $document->move(public_path('/curriculos'), $document->getClientOriginalName());
        }*/

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
        $tecnico = TecnicoAcademico::where('id', $id)->first();
        $espacios = Espacio::all();
        $dias_semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
        return view('tecnico_academico/edit',['tecnico'=>$tecnico, 'espacios'=>$espacios, 'dias_semana'=>$dias_semana]);
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
        $tecnico = TecnicoAcademico::where('id',$id)->first();
        $request->validate($this->rules($tecnico->nombre));

        $nombre         = $request->nombre;
        $localizacion   = $request->localizacion;
        $hora_inicio    = $request->hora_inicio;
        $hora_termino   = $request->hora_termino;
        $dia_inicio     = $request->dia_inicio;
        $dia_termino    = $request->dia_termino;

        $document = $request->file('curriculo');

        $c_anterior = $tecnico->curriculum;

        if($document){
            $document->move(public_path('/curriculos'), $document->getClientOriginalName());
            //File::delete(public_path('curriculos/' . $c_anterior));
            unlink(public_path('curriculos/' . $c_anterior));

            $tecnico->update([
                'nombre' => $nombre,
                'localizacion' => $localizacion,
                'hora_inicio' => $hora_inicio,
                'hora_termino' => $hora_termino,
                'dia_inicio' => $dia_inicio,
                'dia_termino' => $dia_termino,
                'curriculum' => $document->getClientOriginalName(),
            ]);
        }else{
            $tecnico->update([
                'nombre' => $nombre,
                'localizacion' => $localizacion,
                'hora_inicio' => $hora_inicio,
                'hora_termino' => $hora_termino,
                'dia_inicio' => $dia_inicio,
                'dia_termino' => $dia_termino,
            ]);
        }
        return redirect()->action('TecnicoAcademicoController@index');
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
        return redirect()->action('Inciso9_2_14Controller@index');
    }

    public function rules($nombre = null){
        return [
            'nombre'       => ['required',
                                Rule::unique('tecnicoacademico')->ignore($nombre, 'nombre')],
            'hora_inicio'  => 'required',
            'hora_termino' => 'required',
            'dia_inicio'   => 'required',
            'dia_termino'  => 'required'
        ];
    }

    public function ver_curriculo($id){
        $tecnico = TecnicoAcademico::where('id', $id)->first();
        return response()->file(public_path('curriculos/' . $tecnico->curriculum));
    }
}

