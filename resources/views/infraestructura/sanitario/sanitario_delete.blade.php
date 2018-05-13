@extends('layouts.ver')
@section('title')
	Eliminar sanitario
@endsection

@section('descripcion')
 	<a href="/infraestructura/sanitario" class="btn btn-primary">Regresar</a>

	<form action="/deleteSanitario" method="POST" class="form-horizontal">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<div class="form-group">
			<label for="Tipo" class="col-sm-2 control-label"> Tipo: </label>

			<div class="col-sm-10">
            	<input type='text' name='Tipo' class="form-control" placeholder="Nombre" required>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Borrar</button>
			</div>
		</div>
	</form>

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