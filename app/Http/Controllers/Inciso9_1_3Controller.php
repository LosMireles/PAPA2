<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;
use App\Equipo;
use DB;

class Inciso9_1_3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('inciso', '9.1.3')->get();
        $equipos = DB::table('equipos')->select('localizacion', DB::raw('count(*) as cantidad'))->groupBy('localizacion')->get();
        return view('incisos/seccion9_1/9_1_3', ['preguntas' => $preguntas, 'equipos'=>$equipos]);
    }
}
