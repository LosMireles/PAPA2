@extends('layouts.inciso')

@section('title')
  Inciso 9.2.12
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.12: Los Servicios de Cómputo deben contar
   con el soporte técnico adecuado</h3>
@endsection

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_12Controller@update', $id],
                  'class'  => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="col-sm-4 control-label">{{$pregunta->titulo}}</label>

			<div class="col-sm-8">
				<input type="text" class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}" value="{{$pregunta->respuesta}}">
			</div>
		</div>
	@endforeach

@endsection

@section('botonGuardar')
  {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
  {{ Form::close() }}
@endsection
