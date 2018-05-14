@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Regresar</a>

	<br>
	<h1>Edición de equipos</h1>
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

				<!--Software-->
				<td>
                    @if(!empty($equipo->softwares))
                        @foreach($equipo->softwares as $software)
                            {{$software->nombre}} <br>
                        @endforeach
                    @endif
					</ul>
				</td>
				<td><a href="{{ url('/equipamiento/equipos/actualizar_equipos/'.$equipo->serial ) }}">Editar</td>
			</tr>
		@endforeach
	</table>
@endsection
