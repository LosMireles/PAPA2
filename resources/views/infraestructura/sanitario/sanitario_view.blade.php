@extends('layouts.ver')
@section('title')
	ver sanitarios
@endsection

@section('descripcion')
	<a href="/infraestructura/sanitario" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Listado de sanitarios</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th>Tipo</th>
		<th>Hora de inicio del servicio</th>
		<th>Hora de fin del servicio</th>
		<th>Laborable desde</th>
		<th>Laborable hasta</th>
		<th>Limpieza</th>
		<th>Cantidad de personal de limpieza</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	@foreach ($sanitarios as $sanitario)
		<tr>
            <td>{{ $sanitario->Tipo }}</td>
			<td>{{ $sanitario->InicioHora }}</td>
			<td>{{ $sanitario->FinHora }}</td>
			<td>{{ $sanitario->InicioDia }}</td>
			<td>{{ $sanitario->FinDia }}</td>
			<td>{{ $sanitario->Limpieza }}</td>
			<td>{{ $sanitario->CantidadPersonal }}</td>
		</tr>
	@endforeach
@endsection