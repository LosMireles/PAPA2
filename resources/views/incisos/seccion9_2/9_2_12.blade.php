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

@section('cabeza_tabla')
	<tr>
		<th data-toggle="tooltip" title="Nombre completo del técnico">Nombre</th>
		<th data-toggle="tooltip" title="Horario de trabajo">Horario</th>
		<th data-toggle="tooltip" title="Días laborales">Días laborales</th>
		<th data-toggle="tooltip" title="Dónde se encuentra ubicado el técnico">Ubicación</th>
		<th data-toggle="tooltip" title="Currículum del técnico académico">Currículo</th>
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

