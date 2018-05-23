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
                <input type="hidden" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}" value="{{$pregunta->respuesta}}"required>
            </div>
        </div>
    @endforeach

@endsection

@section('cabeza_tabla')
  <h4>Tabla de softwares y asignaturas que lo utilizan</h4>
    <tr>
        <th>Asignatura</th>
        <th>Nombre software</th>
        <th>Disponibilidad software</th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach($softwares as $software)
        <tr>
            <td>
                @if(!empty($software->asignaturas))
                    @foreach($software->asignaturas as $asignatura)
                        {{$asignatura->nombre}} <br>
                    @endforeach
                @endif
            </td>
            <td>{{$software->nombre}}</td>
            <td>{{$software->licencia}}</td>
        </tr>
    @endforeach
@endsection

