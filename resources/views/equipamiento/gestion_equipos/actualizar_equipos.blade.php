@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Regresar</a>

	<h1 class="text-center">Edición de equipos</h1>

	<table class="table table-hover">
		<tr>
			<th data-toggle="tooltip" title="Serial que pertenece al equipo"> Serial del equipo</th>
			<th data-toggle="tooltip" title="El equipo dispone de manual de usuario"> Manual de usuario</th>
			<th data-toggle="tooltip" title="El equipo se encuentra actualmente operable">Operable</th>
			<th data-toggle="tooltip" title="Ubicación donde se encuentra el equipo">Localización</th>
			<th data-toggle="tooltip" title="Software que se encuentra instalado en el equipo">Software</th>
		</tr>
		@foreach($equipos as $equipo)
			<tr>
				<!--Serial del equipo-->
				<td>{{$equipo->serial}}</td>
				
				<!--Manual de usuario-->
				@if($equipo->manualUsuario)
					<td>Sí</td>
				@else
					<td>No</td>
				@endif
				
				<!--Operable-->
				@if($equipo->operable)
					<td>Sí</td>
				@else
					<td>No</td>
				@endif
				
				<!--Localizacion-->
				<td>{{$equipo->localizacion}}</td>
				<td>
					<?php 
						$software_equipo = json_decode($equipo->software, true);
					?>
					<ul style="margin: 0px;">
					@foreach($software_equipo as $software)
						<li>{{ $software }}</li>
					@endforeach
					</ul>
				</td>
				<td><a href="{{ url('/equipamiento/equipos/actualizar_equipos/'.$equipo->serial ) }}">Editar</td>
			</tr>
		@endforeach
	</table>
@endsection
