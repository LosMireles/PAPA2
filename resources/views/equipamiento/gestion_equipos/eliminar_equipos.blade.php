@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Regresar</a>

	<form action="/gestion_equipo_borrar" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <label for="serial">Serial</label><br>
         <input type="text" name="serial">
         <input type = 'submit' value = "Borrar equipo"/>
	</form>
	<br>
	<table border="1">
		<tr>
			<th>
				<div class="tooltip">
					Serial del equipo
					<span class="tooltiptext">Serial que pertenece al equipo</span>
				</div>
			</th>

			<th>
				<div class="tooltip">
					Manual de usuario
					<span class="tooltiptext">El equipo dispone de manual de usuario</span>
				</div>	
			</th>
			
			<th>
				<div class="tooltip">
					Operable
					<span class="tooltiptext">El equipo se encuentra actualmente operable</span>
				</div>	
			</th>
			
			<th>
				<div class="tooltip">
					Localización
					<span class="tooltiptext">Ubicación donde se encuentra el equipo</span>
				</div>	
			</th>
			
			<th>
				<div class="tooltip">
					Software
					<span class="tooltiptext">Software que se encuentra instalado en el equipo</span>
				</div>	
			</th>
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
			</tr>
		@endforeach
	</table>
@endsection
