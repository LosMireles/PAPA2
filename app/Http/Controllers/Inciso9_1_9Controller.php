<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Cubiculo;

class Inciso9_1_9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.9')->get();
        $cubiculos = Cubiculo::all();

        return view('incisos/seccion9_1/9_1_9')
            ->with([
                'preguntas' => $preguntas,
                'id'        => $preguntas[0]->id,
                'cubiculos' => $cubiculos
            ]);
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
        $preguntas = Pregunta::where('inciso', '9.1.9')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;

        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_1_9Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }

}
