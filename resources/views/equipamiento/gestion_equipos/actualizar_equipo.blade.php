@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="{{ url('/') }}">Home</a>
	<form action="/gestion_equipo_modificar" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<label for="serial">Serial: </label><br>
		<input type="text" name="serial" value="{{$equipo->serial}}">

		<br><br><label for="manual">Manual de usuario: </label><br>
		@if($equipo->manualEquipo == 1)
			<input type="radio" name="manual" value="1" checked>Sí <br>
			<input type="radio" name="manual" value="0"> No <br><br>
		@else
			<input type="radio" name="manual" value="1">Sí <br>
			<input type="radio" name="manual" value="0" checked> No <br><br>
		@endif

		<br><br><label>Operable: </label><br>
		@if($equipo->operable == 1)
			<input type="radio" name="operable" value="1" checked>Sí <br>
			<input type="radio" name="operable" value="0"> No <br><br>
		@else
			<input type="radio" name="operable" value="1">Sí <br>
			<input type="radio" name="operable" value="0" checked> No <br><br>
		@endif

		<br><br><label for="localizacion">Localización: </label><br>
		<select name="localizacion">
			@foreach($espacios as $espacio)
				@if($equipo->localizacion == $espacio->clase)
					<option value="{{$espacio->clase}}" selected>{{$espacio->clase}}</option>
				@else
					<option value="{{$espacio->clase}}">{{$espacio->clase}}</option>
				@endif
			@endforeach
		</select>

		<br><br><label for="software">Software: </label><br>
		@foreach($software as $single_software)
			<!-- Mala forma de ver que software tiene un equipo -->
			<?php $temp = 0 ?>
			
			@foreach($equipo->software as $a)
				@if($single_software->nombre == $a)
					<?php $temp = 1 ?>
				@endif
			@endforeach

			@if($temp == 1)
				<input type="checkbox" name="software[]" checked value={{$single_software->nombre}}> {{$single_software->nombre}}<br>
			@else
				<input type="checkbox" name="software[]" value={{$single_software->nombre}}> {{$single_software->nombre}}<br>
			@endif
		@endforeach
		<input type = 'submit' value = "Modificar equipo"/>
	</form>
@endsection

<!-- 

<table>
			<tr>
				<td>Serial: </td>
				<td>
					<input type="text" name="serial" value="{{$equipo->serial}}">
				</td>
			</tr>
			
			<tr>
				<td>Manual usuario: </td>
				<td>
					@if($equipo->manualEquipo == 1)
						<input type="radio" name="manual" value="1" checked>Sí <br>
						<input type="radio" name="manual" value="0"> No <br><br>
					@else
						<input type="radio" name="manual" value="1">Sí <br>
						<input type="radio" name="manual" value="0" checked> No <br><br>
					@endif
				</td>
			</tr>

			<tr>
				<td>Operable: </td>
				<td>
					@if($equipo->operable == 1)
						<input type="radio" name="operable" value="1" checked>Sí <br>
						<input type="radio" name="operable" value="0"> No <br><br>
					@else
						<input type="radio" name="operable" value="1">Sí <br>
						<input type="radio" name="operable" value="0" checked> No <br><br>
					@endif
				</td>
			</tr>

			<tr>
				<td>Localización: </td>
				<td>
					<select name="localizacion">
						@foreach($espacios as $espacio)
							@if($equipo->localizacion == $espacio->clase)
								<option value="{{$espacio->clase}}" selected>{{$espacio->clase}}</option>
							@else
								<option value="{{$espacio->clase}}">{{$espacio->clase}}</option>
							@endif
						@endforeach
					</select><br><br>
				</td>
			</tr>

			<tr>
				<td>Software: </td>
				<td>
					@foreach($software as $single_software)
						\<\?php $temp = 0 ?>
						
						@foreach($equipo->software as $a)
							@if($single_software->nombre == $a)
								\<\?php $temp = 1 ?>
							@endif
						@endforeach

						@if($temp == 1)
							<input type="checkbox" name="software[]" value="{{$single_software->nombre}}" checked> {{$single_software->nombre}}<br>
						@else
							<input type="checkbox" name="software[]" value="{{$single_software->nombre}}"> {{$single_software->nombre}}<br>
						@endif
					@endforeach
				</td>
			</tr>

			<tr>
				<td>
					<input type = 'submit' value = "Modificar equipo"/>
				</td>
			</tr>
		</table>

-->
