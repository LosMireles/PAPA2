@extends('layouts.inciso')

@section('title')
  Inciso 9.2.1
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.1: Para cada asignatura mencionar el software
   que se utiliza y si está disponible dentro de la institución</h3>
@endsection

@section('formopen')
    {{Form::open(['class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}">
			</div>
		</div>
	@endforeach

@endsection
