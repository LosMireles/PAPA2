@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.12
@endsection

@section('descripcion')
  <h3 class="text-justify">Inciso 9.2.12: Los Servicios de Cómputo deben contar
   con el soporte técnico adecuado</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_12Controller@update', $id],
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
            <textarea class="form-control" id="{{$preguntas[1]->id}}" name="{{$preguntas[1]->id}}">{{$preguntas[1]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[2]->id}}" class="control-label"> {{$preguntas[2]->titulo}} </label>

		<div>
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

	<div class="form-group">
		<label for="{{$preguntas[3]->id}}" class="control-label"> {{$preguntas[3]->titulo}} </label>

		<div>
            <textarea class="form-control" id="{{$preguntas[3]->id}}" name="{{$preguntas[3]->id}}">{{$preguntas[3]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas[4]->id}}" class="control-label"> {{$preguntas[4]->titulo}} </label>

		<div>
            <textarea class="form-control" id="{{$preguntas[4]->id}}" name="{{$preguntas[4]->id}}">{{$preguntas[4]->respuesta}}</textarea>
		</div>
	</div>

@endsection

<!-- ------------ SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC------------- -->

@section('boton_guardar')
    <div class="text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

