<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Software;
use App\Curso;

use DB;

class Inciso9_2_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.2.1')->get();
        $cursos = Curso::all();
        $cursos_softwares = DB::table('curso_software')->get();

        return view('incisos/seccion9_2/9_2_1')
            ->with(['preguntas'         => $preguntas,
                     'id'               => $preguntas[0]->id,
                     'cursos'           => $cursos,
                     'cursos_softwares' => $cursos_softwares
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
        // Volver a obtener los elementos del inciso 9.2.1
        $preguntas = Pregunta::where('inciso', '9.2.1')->get();

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;

        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_2_1Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }

}

