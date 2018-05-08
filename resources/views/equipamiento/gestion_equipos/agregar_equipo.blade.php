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
					<label for="serial">Serial: </label>		
				</td>
				<td>
					<input type="text" name="serial" placeholder="ID del equipo"> <br><br>
				</td>
			</tr>

			<tr>
				<td>
					<label for="manual">Se cuenta con manual: </label> <br>
				</td>
				<td>
					<input type="radio" name="manual" value="1" checked="">Sí <br>
					<input type="radio" name="manual" value="0"> No <br><br>				
				</td>
			</tr>

			<tr>
				<td>
					<label for="operable">Se encuentra operable: </label> <br>
				</td>
				<td>				
					<input type="radio" name="operable" value="1" checked="">Sí <br>
					<input type="radio" name="operable" value="0"> No <br><br>
				</td>
			</tr>

			<tr>
				<td>
					<label for="localizacion">Localización: </label>
				</td>
				<td>
					<select name="localizacion">
						@foreach($espacios as $espacio)
							<option value="{{$espacio->clase}}">{{$espacio->clase}}</option>
						@endforeach
					</select><br><br>
				</td>
			</tr>

			<tr>
				<td>	
					<label for="software">Software: </label><br>
				</td>
				<td>
					@foreach($software as $single_software)
						<input type="checkbox" name="software[]" value="{{$single_software->nombre}}"> {{$single_software->nombre}}<br>
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
