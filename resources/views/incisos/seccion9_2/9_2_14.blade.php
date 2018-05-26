@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.14
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.14: Especificamente, el personal técnico,
    es suficiente y cuenta con el perfil adecuado para dar soporte, no solo a la
     infraestructura de telecomunicaciones y redes, sino también para el desarrollo
     de aplicaciones, incorporación de tecnologías emergentes, administración y
     hospedaje, desarrollo web, minería de datos, soluciones inteligentes, reingeniería
     de procesos mediante el use de las TIC y la administracion de la propia
     plataforma tecnológica y de aprendizaje que soporta el modelo educativo, ya
      sea a distancia o presencial. </h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_2_14Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')
	

  <div class="form-group">
    <label for="{{$preguntas[0]->id}}" class="control-label"> {{$preguntas[0]->titulo}} </label>

      <div>
        <!--<textarea class="form-control" id="{{$preguntas[0]->id}}" name="{{$preguntas[0]->id}}"value="{{$preguntas[0]->respuesta}}"></textarea>-->
        @if($preguntas[0]->respuesta == 'Si')
          <input type="radio" name="{{$preguntas[0]->id}}" value="Si" checked> Sí <br>
          <input type="radio" name="{{$preguntas[0]->id}}" value="No"> No
        @elseif($preguntas[0]->respuesta == 'No')
          <input type="radio" name="{{$preguntas[0]->id}}" value="Si"> Sí <br>
          <input type="radio" name="{{$preguntas[0]->id}}" value="No" checked> No
        @else
          <input type="radio" name="{{$preguntas[0]->id}}" value="Si"> Sí <br>
          <input type="radio" name="{{$preguntas[0]->id}}" value="No"> No
        @endif
      </div>
    </div>

  <div class="form-group">
    <label for="{{$preguntas[1]->id}}" class="control-label"> {{$preguntas[1]->titulo}} </label>

    <div>
      <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}">{{$preguntas[1]->respuesta}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="{{$preguntas[2]->id}}" class="control-label"> {{$preguntas[2]->titulo}} </label>

    <div>
      <input type="hidden" class="form-control" id="{{$preguntas[2]->id}}" name="{{$preguntas[2]->id}}">
    </div>

    @component('layouts.componentes.tabla_incisos_agregar')
      @slot('cabeza_tabla')
        <th>Nombre</th>
        <th>Grado académico</th>
        <th>Certificados</th>
        <th>Años de experiencia</th>
      @endslot

      @slot('cuerpo_tabla')
        @foreach($tecnicos as $tecnico)
          <tr>
            <td>{{$tecnico->nombre}}</td>
            <td>{{$tecnico->grado_academico}}</td>
            <td>{{$tecnico->certificados}}</td>
            <td>{{$tecnico->anios_exp}}</td>

            <td>a</td>
            @component('layouts.boton_borrar')
              @slot('controlador_borrar')
                {{ Form::open(['action' => ['TecnicoAcademicoController@destroy', $tecnico->id]]) }}
              @endslot
            @endcomponent
          </tr>
        @endforeach
      @endslot
    @endcomponent

  </div>
@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

