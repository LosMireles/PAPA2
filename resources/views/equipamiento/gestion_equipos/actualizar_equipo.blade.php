@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Home</a>
	<h1>Formulario para la edición del equipo {{$equipo->serial}}</h1>
	<form action="/gestion_equipo_modificar" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<input type="hidden" name="id" value="{{$equipo->id}}">

		<table>
			<tr>
				<td>
					<label for="serial">Serial: </label><br>
				</td>
				<td>
					<input type="text" name="serial" value="{{$equipo->serial}}">
				</td>
			</tr>
			<tr>
				<td>
					<label for="manual">Manual de usuario: </label>
				</td>
				<td>
					@if($equipo->manualEquipo == 1)
						<input type="radio" name="manual" value="1" checked>Sí <br>
						<input type="radio" name="manual" value="0"> No
					@else
						<input type="radio" name="manual" value="1">Sí <br>
						<input type="radio" name="manual" value="0" checked> No
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label>Operable: </label>
				</td>
				<td>
					@if($equipo->operable == 1)
						<input type="radio" name="operable" value="1" checked>Sí <br>
						<input type="radio" name="operable" value="0"> No
					@else
						<input type="radio" name="operable" value="1">Sí <br>
						<input type="radio" name="operable" value="0" checked> No
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="localizacion">Localización: </label>
				</td>
				<td>
					<select name="localizacion">
						@foreach($espacios as $espacio)
							@if($equipo->localizacion == $espacio->clase)
								<option value="{{$espacio->clase}}" selected>{{$espacio->clase}}</option>
							@else
								<option value="{{$espacio->clase}}">{{$espacio->clase}}</option>
							@endif
						@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<label for="nombre_software">Software: </label>
				</td>
				<td>
                    @foreach($softwares as $software)
                        <input type = 'checkbox' name = 'nombre_software[]'
                        checked value = "{{$software->nombre}}">
                        {{$software->nombre}} <br>
                    @endforeach
				</td>
			</tr>
			<tr>
				<td>
					<input type = 'submit' value = "Modificar equipo"/>
				</td>
			</tr>
		</table>
	</form>
@endsection
