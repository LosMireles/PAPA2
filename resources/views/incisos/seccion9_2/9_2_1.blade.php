@extends('layouts.inciso')

@section('title')
  Inciso 9.2.1
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.1: Para cada asignatura mencionar el software
   que se utiliza y si está disponible dentro de la institución</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_1Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

    @foreach($preguntas as $pregunta)
        <div class="form-group">
            <label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

            <div class="col-sm-8">
                <input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}" value="{{$pregunta->respuesta}}"required>
            </div>
        </div>
    @endforeach

@endsection

@section('cabeza_tabla')
    <tr>
        <th>Nombre de la asignatura</th>
        <th>Descripción de la asignatura</th>
        <th>Curso de la asignatura</th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach($asignaturas as $asignatura)
        <tr>
            <td>{{$asignatura->nombre}}</td>
            <td>{{$asignatura->descripcion}}</td>
            <td>{{$asignatura->curso->nombre}}</td>
        </tr>
    @endforeach
@endsection

