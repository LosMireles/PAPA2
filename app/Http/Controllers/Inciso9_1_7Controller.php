<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;

use App\Espacio;
use App\Curso;

class Inciso9_1_7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.7')->get();

        $cursos = Curso::all();
        $cursosLCC = Curso::where('departamento', 'LCC')->get();
        $cursosLM = Curso::where('departamento', 'LM')->get();
        $cursosOtros = Curso::where('departamento', 'Otros')->get();
        return view('incisos/seccion9_1/9_1_7')->with(
                    ['preguntas' => $preguntas,
                     'cursos' => $cursos,
		     'id' => $preguntas[0]->id,
                     'cursosLCC' => $cursosLCC,
                     'cursosLM' => $cursosLM,
                     'cursosOtros' => $cursosOtros]);

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
        $preguntas = Pregunta::where('inciso', '9.1.7')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;
        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_1_7Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }


}
