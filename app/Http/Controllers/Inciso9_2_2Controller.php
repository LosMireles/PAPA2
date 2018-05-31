<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Software;

class Inciso9_2_2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $preguntas   = Pregunta::where('inciso', '9.2.2')       -> get();
         $softwares   = Software::all();
         $lenguajes   = Software::where('clase', 'Lenguaje')     -> pluck('nombre');
         $cases       = Software::where('clase', 'Case')         -> pluck('nombre');
         $bds         = Software::where('clase', 'Manejador BD') -> pluck('nombre');
         $paqueterias = Software::where('clase', 'Paqueteria')   -> pluck('nombre');
         $otros = Software::where('clase', 'Otro')               -> pluck('nombre');
         $otros       = Software::where('clase', 'Otro')         -> pluck('nombre');
 
         return view('incisos/seccion9_2/9_2_2')
             ->with(['preguntas'    => $preguntas,
                      'id'          => $preguntas[0]->id,
                      'softwares'   => $softwares,
                      'lenguajes'   => $lenguajes,
                      'cases'       => $cases,
                      'bds'         => $bds,
                      'paqueterias' => $paqueterias,
                      'otros'       => $otros
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
        $preguntas = Pregunta::where('inciso', '9.2.2')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;

        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_2_2Controller@index')
            ->with('status', 'Respuestas guardadas');;
    }

}
