@extends('layouts.menus')

@section('title')
	Técnicos académicos
@endsection

@section('descipcion')
	<a href="{{ url('/') }}" class="btn btn-primary">Regresar</a>
	<a href="{{ action('TecnicoAcademicoController@create') }}" class="btn btn-warning">Agregar un técnico académico</a>
	<h1 class="text-center">Técnicos académicos</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th data-toggle="tooltip" title="Nombre completo del técnico">Nombre</th>
		<th data-toggle="tooltip" title="Horario de trabajo">Horario</th>
		<th data-toggle="tooltip" title="Días laborales">Días laborales</th>
		<th data-toggle="tooltip" title="Dónde se encuentra ubicado el técnico">Ubicación</th>
		<th data-toggle="tooltip" title="Currículum del técnico académico">Currículo</th>
		<th></th>
		<th></th>
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
			
			<td class="text-center">
				{{ Form::open( array('action'=>['TecnicoAcademicoController@edit', $tecnico->id], 'method' => 'get') ) }}
					{{ Form::submit('Editar', ['class' => 'btn btn-warning']) }}
				{{ Form::close() }}
			</td>

            <td class="text-center">
	            {{ Form::open( array( 'action' => ['TecnicoAcademicoController@destroy', $tecnico->id], 'method' => 'DELETE' ) ) }}
	            	{{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
	            {{ Form::close() }}
            </td>
		</tr>
	@endforeach

	<!--<tr>
		<td>
			<a href="{{ url('/tecnico_academico/editar') }}">Editar</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/tecnico_academico/ver') }}">Ver</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/tecnico_academico/borrar') }}">Borrar</a>
		</td>
	</tr>-->
@endsection
