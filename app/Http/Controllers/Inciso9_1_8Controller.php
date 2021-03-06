<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;

use App\Aula;
use DB;

class Inciso9_1_8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.8')->get();
        $aulas = Aula::all();

        return view('incisos/seccion9_1/9_1_8', ['preguntas' => $preguntas,'id' => $preguntas[0]->id,'id', 'aulas'=>$aulas]);
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
        // Volver a obtener los elementos del inciso 9.1.6
        $preguntas = Pregunta::where('inciso', '9.1.8')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;
        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_1_8Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }


}
