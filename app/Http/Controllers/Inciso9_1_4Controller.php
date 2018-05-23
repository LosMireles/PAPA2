<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;

class Inciso9_1_4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.4')->get();
        $id = $preguntas[0]->id;
        return view('incisos/seccion9_1/9_1_4', ['preguntas' => $preguntas, 'id' => $id]);
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
        $preguntas = Pregunta::where('inciso', '9.1.4')->get();

        $arr[] = array_slice($request->all(), 2);

        $respuestas = array_slice($request->all(), 2);
        for($i = 0; $i < sizeof($preguntas); $i++){
            $preguntas[$i]->update([
                'respuesta' => $respuestas[$i]
            ]);
        }

        return redirect()->action('Inciso9_1_4Controller@index');
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
