@extends('layouts.ver')
@section('title')
	ver espacios
@endsection

@section('descripcion')
	<a href="/infraestructura/espacio">Regresar</a>
	<h1 class="text-center">Listado de espacios</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th data-toggle="tooltip" title="Un identificador único (por ejemplo A202)">Nombre del espacio</th>

		<th data-toggle="tooltip" title="Metros cuadrados de superficie que abarca el espacio">Superficie</th>
		
		<th data-toggle="tooltip" title="Cantidad de espacios con el mismo nombre y características">Cantidad</th>
		
		<th data-toggle="tooltip" title="Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)">Clase</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	@foreach ($espacios as $espacio)
		<tr>
			<td>{{ $espacio->tipo }}</td>
			<td>{{ $espacio->superficie }}</td>
			<td>{{ $espacio->cantidad }}</td>
			<td>{{ $espacio->clase }}</td>
		</tr>
	@endforeach
@endsection