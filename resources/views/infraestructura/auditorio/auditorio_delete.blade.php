@extends('layouts.ver')
@section('title')
	 Eliminar auditorio
@endsection

@section('descripcion')
	 <a href="/infraestructura/auditorio" class="btn btn-primary">Regresar</a>

	 <form action = "/deleteAuditorio" method="POST" class="form-horizontal">
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

			<div class="form-group">
				 <label for="nombre" class="col-sm-2 control-label">Código del cubículo: </label>

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

	 <h1 class="text-center">Listado de auditorios</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<td>IdAuditorio</td>
		<td>Tipo</td>
		<td>CantidadEquipo</td>
		<td>CantidadAV</td>
		<td>Capacidad</td>
		<td>CantidadSanitarios</td>
	</tr>
@endsection


@section('cuerpo_tabla')
	@foreach ($auditorios as $auditorio)
	<tr>
		<td>{{ $auditorio->IdAuditorio }}</td>
		<td>{{ $auditorio->Tipo }}</td>
		<td>{{ $auditorio->CantidadEquipo }}</td>
		<td>{{ $auditorio->CantidadAV }}</td>
		<td>{{ $auditorio->Capacidad }}</td>
		<td>{{ $auditorio->CantidadSanitarios }}</td>
	</tr>
	@endforeach
@endsection