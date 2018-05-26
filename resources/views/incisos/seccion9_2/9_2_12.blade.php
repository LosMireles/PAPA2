@extends('layouts.inciso_general')

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

@section('cabeza_tabla')
	<tr>
		<th>Nombre</th>
		<th>Horario</th>
		<th>Días laborales</th>
		<th>Ubicación</th>
		<th>Currículo</th>
	</tr>
@endsection

@section('cuerpo_tabla')
	@foreach($tecnicos as $tecnico)
		<tr>
			<td>{{$tecnico->nombre}}</td>
			<td>
				<?php
					$inicio = strtotime($tecnico->hora_inicio);
					$inicio_format = date('H:i', $inicio);
					$termino = strtotime($tecnico->hora_termino);
					$termino_format = date('H:i', $termino);
				?>
				{{$inicio_format}} - {{$termino_format}}
			</td>
			<td>{{$tecnico->dia_inicio}} - {{$tecnico->dia_termino}}</td>
			<td>{{$tecnico->localizacion}}</td>
			<td>
				<a href="{{ url('/tecnicos_academicos/ver_curriculo/'. $tecnico->id ) }}">{{$tecnico->curriculum}}</a>
			</td>
		</tr>
	@endforeach
@endsection

<!-------------- SECCION DE FOTOGRAFIAS, EVIDENCIAS, ETC--------------->

@section('boton_guardar')
    <div class="col-md-4 text-center">
        {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
    </div>
@endsection

