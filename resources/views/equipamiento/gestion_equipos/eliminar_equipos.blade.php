@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/equipamiento/equipos/">Regresar</a>
	<form action="/gestion_equipo_borrar" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <label for="serial">Serial</label><br>
         <input type="text" name="serial">
         <input type = 'submit' value = "Borrar equipo"/>
         <!--<table>
            <tr>
               <td>Serial: </td>
               <td><input type='text' name='serial' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Borrar equipo"/>
               </td>
            </tr>
         </table>-->
	</form>
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
