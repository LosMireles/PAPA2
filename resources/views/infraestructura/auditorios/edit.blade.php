@extends('layouts.actualizar')

@section('title')
   editar auditorio <?php echo$auditorio->Tipo; ?>
@endsection

@section('descripcion')
    <a href="{{action('AuditorioController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del auditorio {{$auditorio->Tipo}}</h1>
@endsection

@section('accion')
    action = "{{action('AuditorioController@update', $auditorio->Tipo)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['AuditorioController@update', $auditorio->Tipo],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre del auditorio">Nombre</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Tipo' value ="{{$auditorio->Tipo}}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadEquipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de equipo de computo disponible en el auditorio">Cantidad de equipo</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadEquipo' id="CantidadEquipo" placeholder="1" value="{{$auditorio->CantidadEquipo}}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadAV" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de equipo audiovisual disponible en el auditorio (proyectores, televisores, etc.)">Cantidad de equipo audiovisual</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadAV' id="CantidadAV" placeholder="1" value="{{$auditorio->CantidadAV}}"  required>
		</div>
	</div>

	<div class="form-group">
		<label for="Capacidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Capacidad máxima de personas que soporta el auditorio.">Capacidad</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Capacidad' id="Capacidad" placeholder="10" value="{{$auditorio->Capacidad}}"  required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadSanitarios" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de sanitarios disponibles en el auditorio">Cantidad de sanitarios</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadSanitarios' id="CantidadSanitarios" placeholder="1" value="{{$auditorio->CantidadSanitarios}}" required>
		</div>
	</div>

  <div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
      <input type='file' class="form-control" name='Fotografias[]' id="Fotografias" multiple accept=".gif,.bmp,.jpg,.png, .jpeg"/>
		</div>
	</div>
@endsection
