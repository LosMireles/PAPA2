<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Asesoria;
use Illuminate\Support\Facades\Storage;

class Inciso9_1_10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.10')->get();
        $id = $preguntas[0]->id;
        $asesorias = Asesoria::all();

        return view('incisos/seccion9_1/9_1_10', ['preguntas' => $preguntas, 'id' => $id, 'asesorias' => $asesorias]);
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
        $preguntas = Pregunta::where('inciso', '9.1.10')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;

        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado' => $estado
            ]);
        }

        return redirect()->action('Inciso9_1_10Controller@index')
            ->with('status', 'Respuestas guardadas');
    }

    public function guardarImg(Request $request){
      if ($request->hasFile('Fotografias')) {
        foreach($request->Fotografias as $foto){
          $foto->storeAs('infraestructura/asesorias/', $foto->getClientOriginalName());
        }
      }
      return redirect('/inciso_9_1_10');
    }

    public function borrarImg($imagen)
    {
      $dirImagen = 'infraestructura/asesorias/'. $imagen;
      Storage::delete($dirImagen);
      return redirect('/inciso_9_1_10');
    }

}
