@extends('layouts.inciso_general')

@section('title')
  Inciso 9.1.12
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.1.12: En los espacios mencionados en el inciso 9.1.11, se debe
      tener un lugar cómodo por cada diez estudiantes inscritos en el programa,
      ofreciendo las condiciones adecuadas de higiene y seguridad. </h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_1_12Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

<!-- ------------ LAS PREGUNTAS Y SUS RESPUESTAS------------- -->

@section('contenido_formulario')

	<div class="form-group">
		<label for="{{$preguntas[0]->id}}" class="control-label"> {{$preguntas[0]->titulo}} </label>

		<div>
		  <textarea class="form-control" id="{{$preguntas[0]->id}}" name="{{$preguntas[0]->id}}">{{$preguntas[0]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
    <label for="{{$preguntas[1]->id}}" class="control-label"> {{$preguntas[1]->titulo}} </label>

      <div>
        <!--<textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}"value="{{$preguntas[1]->respuesta}}"></textarea>-->
        @if($preguntas[1]->respuesta == 'Si')
          <input type="radio" name="{{$preguntas[1]->id}}" value="Si" checked> Sí <br>
          <input type="radio" name="{{$preguntas[1]->id}}" value="No"> No
        @elseif($preguntas[1]->respuesta == 'No')
          <input type="radio" name="{{$preguntas[1]->id}}" value="Si"> Sí <br>
          <input type="radio" name="{{$preguntas[1]->id}}" value="No" checked> No
        @else
          <input type="radio" name="{{$preguntas[1]->id}}" value="Si" checked> Sí <br>
          <input type="radio" name="{{$preguntas[1]->id}}" value="No"> No
        @endif
      </div>
    </div>
	
	<div class="form-group">
    <label for="{{$preguntas[2]->id}}" class="control-label"> {{$preguntas[2]->titulo}} </label>

	<div>
        <!--<textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}"value="{{$preguntas[1]->respuesta}}"></textarea>-->
        @if($preguntas[2]->respuesta == 'Si')
          <input type="radio" name="{{$preguntas[2]->id}}" value="Si" checked> Sí <br>
          <input type="radio" name="{{$preguntas[2]->id}}" value="No"> No
        @elseif($preguntas[2]->respuesta == 'No')
          <input type="radio" name="{{$preguntas[2]->id}}" value="Si"> Sí <br>
          <input type="radio" name="{{$preguntas[2]->id}}" value="No" checked> No
        @else
          <input type="radio" name="{{$preguntas[2]->id}}" value="Si" checked> Sí <br>
          <input type="radio" name="{{$preguntas[2]->id}}" value="No"> No
        @endif
      </div>
    </div>

@endsection

<!-- ------------ LAS TABLAS QUE CORRESPONDAN------------- -->

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->
@section('boton_guardar')
    <div class="text-center">
      <div>
        <label for="terminado" class="control-label">
          Marque esta casilla si termino de responder:
        </label>
        @if ( $preguntas[0]->estado == 1)
          <input type="checkbox" name="terminado" value="si" checked>
        @else
          <input type="checkbox" name="terminado" value="si">
        @endif
      </div>

        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

