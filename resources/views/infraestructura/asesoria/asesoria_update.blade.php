@extends('layouts.insertar')

@section('title')
   editar espacio de asesoria <?php echo $asesorias->Tipo; ?>
@endsection

@section('descripcion')
   <a href="/editarAsesoria" class="btn btn-primary">Regresar</a>
   <h1 class="text-center">Formulario para editar un espacio de asesorías</h1>
@endsection

@section('accion')
   action = "/editAsesoria/<?php echo $asesorias->IdAsesoria; ?>"
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Identificador de la asesoria">Tipo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Tipo' value = '<?php echo $asesorias->Tipo; ?>'/>
		</div>
	</div>

	<div class="form-group">
		<label for="InicioHora" class="col-sm-4 control-label" data-toggle="tooltip" title="">Hora de inicio</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='InicioHora' placeholder="00:00" required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinHora" class="col-sm-4 control-label" data-toggle="tooltip" title="">Hora de finalizacion</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='FinHora' placeholder="12:00" required>
		</div>
	</div>

	<div class="form-group">
		<label for="InicioDia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Día de inicio</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='InicioDia' placeholder="Lunes" required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinDia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Día de finalización</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='FinDia' placeholder="Sábado" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Materia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Asignatura: </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Materia' placeholder="Asignatura" required>
		</div>
	</div>
@endsection
