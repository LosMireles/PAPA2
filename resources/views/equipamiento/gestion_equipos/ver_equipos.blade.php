@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Home</a>
	<br>
	<table border="1">
		<tr>
			<th>Serial del equipo</th>
			<th>Manual de usuario</th>
			<th>Operable</th>
			<th>Localización</th>
			<th>Software con el que cuenta</th>
		</tr>
		@foreach($equipos as $equipo)
			<tr>
				<td>{{$equipo->serial}}</td>
				<td>{{$equipo->manualUsuario}}</td>
				<td>{{$equipo->operable}}</td>
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
			</tr>
		@endforeach
	</table>
@endsection
