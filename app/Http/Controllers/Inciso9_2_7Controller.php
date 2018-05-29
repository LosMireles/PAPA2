<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Equipo;

class Inciso9_2_7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.2.7')->get();
        $equipos = Equipo::get();
        // Se le manda al index el id del primer elemento del arreglo de preguntas
        // esto pues update requiere de un id.
        return view('incisos/seccion9_2/9_2_7',['preguntas' => $preguntas,
                                                'id' => $preguntas[0]->id,
                                                'equipos' => $equipos]);
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
        // Volver a obtener los elementos del inciso 9.2.7
        $preguntas = Pregunta::where('inciso', '9.2.7')->get();

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;

        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_2_7Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }

}
