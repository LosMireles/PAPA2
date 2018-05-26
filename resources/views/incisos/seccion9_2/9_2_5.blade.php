@extends('layouts.inciso_general')

@section('title')
  Inciso 9.2.5
@endsection

@section('descripcion')
  <h3 class="text-center">Inciso 9.2.5: Se debe contar con al menos tres plataformas
   de cómputo diferentes que estén disponibles y accesibles para los estudiantes y
  el personal docente del programa</h3>
@endsection

@section('formopen')
    {{Form::open(['action' => ['Inciso9_2_5Controller@update', $id],
                  'class'  => 'form'])}}
@endsection

<!-------------- LAS PREGUNTAS Y SUS RESPUESTAS--------------->

@section('contenido_formulario')

	@foreach($preguntas as $pregunta)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="control-label">
			    {{$pregunta->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}"></textarea>
			</div>
		</div>
	@endforeach

@endsection

<!-------------- LAS TABLAS QUE CORRESPONDAN--------------->

<!-------------- SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC--------------->

@section('boton_guardar')
    <div class="col-md-4 text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

