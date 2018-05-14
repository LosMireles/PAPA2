
@extends('layouts.insertar')

@section('title')
   editar auditorio <?php echo$auditorios->Tipo; ?>
@endsection

@section('descripcion')
   <a href="/editarAuditorio" class="btn btn-primary">Regresar</a>
   <h1 class="text-center">Formulario para editar un auditorio</h1>
@endsection

@section('accion')
   action = "/editAuditorio/<?php echo $auditorios->IdAuditorio; ?>"
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre del auditorio">Nombre</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Tipo' value = '<?php echo$auditorios->Tipo; ?>' required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadEquipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de equipo de computo disponible en el auditorio">Cantidad de equipo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadEquipo' id="CantidadEquipo" placeholder="1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadAV" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de equipo audiovisual disponible en el auditorio (proyectores, televisores, etc.)">Cantidad de equipo audiovisual</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadAV' id="CantidadAV" placeholder="1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Capacidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Capacidad máxima de personas que soporta el auditorio.">Capacidad</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Capacidad' id="Capacidad" placeholder="10" required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadSanitarios" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de sanitarios disponibles en el auditorio">Cantidad de sanitarios</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadSanitarios' id="CantidadSanitarios" placeholder="1" required>
		</div>
	</div>
@endsection

