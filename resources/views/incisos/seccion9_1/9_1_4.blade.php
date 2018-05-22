@extends('layouts.inciso')

@section('title')
  Inciso 9.1.4
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.1.4: Los responsables del centro de cómputo
  deben ser personal con experiencia y perfil relacionado con el área</h3>
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
