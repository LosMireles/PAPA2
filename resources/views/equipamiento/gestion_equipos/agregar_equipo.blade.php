
@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Regresar</a>

	<h1>Formulario para agregar un equipo</h1>
	<form action="/gestion_equipo_agregar" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<table>
			<tr>
				<td>
					<div class="tooltip">
						<label for="serial">Serial: </label>
						<span class="tooltiptext">Serial del equipo</span>
					</div>
				</td>
				<td>
					<input type="text" name="serial" placeholder="Serial del equipo">
				</td>
			</tr>

			<tr>
				<td>
					<div class="tooltip">
						<label for="manual">Se cuenta con manual: </label> <br>
						<span class="tooltiptext">Indique si el equipo cuenta con un manual de usuario</span>
					</div>
				</td>
				<td>
					<input type="radio" name="manual" value="1" checked="">Sí <br>
					<input type="radio" name="manual" value="0"> No
				</td>
			</tr>

			<tr>
				<td>
					<div class="tooltip">
						<label for="operable">Se encuentra operable: </label>
						<span class="tooltiptext">Indique si el equipo se encuentra operable actualmente</span>
					</div>
				</td>
				<td>
					<input type="radio" name="operable" value="1" checked="">Sí <br>
					<input type="radio" name="operable" value="0"> No
				</td>
			</tr>

			<tr>
				<td>
					<div class="tooltip">
						<label for="localizacion">Localización: </label>
						<span class="tooltiptext">Seleccione la ubicación del equipo</span>
					</div>
				</td>
				<td>
					<select name="localizacion">
						@foreach($espacios as $espacio)
							<option value="{{$espacio->clase}}">{{$espacio->clase}}</option>
						@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<div class="tooltip">
						<label for="nombres">Softwares: </label><br>
						<span class="tooltiptext">
                            Seleccione el software que se encuentra instalado
                            en el equipo
                        </span>
					</div>
				</td>
				<td>
					@foreach($softwares as $single_software)
						<input type="checkbox" name="nombres[]" value="{{$single_software->nombre}}">
						{{$single_software->nombre}}<br>
					@endforeach
				</td>
			</tr>
			<tr>
				<td>
					<input type = 'submit' value = "Agregar equipo"/>
				</td>
			</tr>
		</table>





	</form>
@endsection

