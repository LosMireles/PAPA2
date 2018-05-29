<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Aula;

use PDF;

class Inciso9_1_6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $preguntas = Pregunta::where('inciso', '9.1.6')->get();
	$aulas  = Aula::all();

    return view('incisos/seccion9_1/9_1_6')
        ->with([
            'preguntas' => $preguntas,
            'id'        => $preguntas[0]->id,
            'aulas'     => $aulas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // Volver a obtener los elementos del inciso 9.1.6
        $preguntas = Pregunta::where('inciso', '9.1.6')->get();

        $respuestas = array_slice($request->all(), 2);
        $estado = $request->terminado == "si" ? 1 : 0;

        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i],
                'estado'    => $estado
            ]);
        }

        return redirect()->action('Inciso9_1_6Controller@index')
            ->with('status', 'Respuestas guardadas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
