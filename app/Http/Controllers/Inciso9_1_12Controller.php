<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Auditorio;

class Inciso9_1_12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.12')->get();
        $auditorios = Auditorio::all();
        return view('incisos/seccion9_1/9_1_12')
            ->with(['preguntas'  => $preguntas,
                    'id'         => $preguntas[0]->id,
                    'auditorios' => $auditorios]);
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
        $preguntas = Pregunta::where('inciso', '9.1.12')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;
        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_1_12Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }

}
