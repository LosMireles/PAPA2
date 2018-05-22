@extends('layouts.inciso')

@section('formopen')
	<!--Esta madre envia un id solo para que update jale-->
    {{Form::open(['action' => ['Inciso9_2_7Controller@update', $id],
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

