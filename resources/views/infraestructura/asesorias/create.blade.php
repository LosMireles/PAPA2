@extends('layouts.insertar')

@section('title')
   insertar un espacio de asesorías
@endsection

@section('descripcion')
    <a href="{{action('AsesoriaController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Formulario para agregar un asesoria</h1>
@endsection

@section('accion')
   action = "{{action('AsesoriaController@store')}}"
@endsection

@section('contenido_formulario')
   	<div class="form-group">
		<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Identificador de la asesoria">Identificador de la asesoria</label>

		<div class="col-sm-8">
      		<?php
      			if(!empty($_GET['tipo']))
      				$tipo = $_GET['tipo'];
      			else
      				$tipo = '';
      		?>
      		<input type="text-center" class="form-control" name="Tipo" value={{$tipo}}>

      		</div>
	</div>

	<div class="form-group">
		<label for="InicioHora" class="col-sm-4 control-label" data-toggle="tooltip" title="">Hora de inicio</label>

		<div class="col-sm-8">
			<input type='time' class="form-control" name='InicioHora' placeholder="00:00" required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinHora" class="col-sm-4 control-label" data-toggle="tooltip" title="">Hora de finalizacion</label>

		<div class="col-sm-8">
			<input type='time' class="form-control" name='FinHora' placeholder="12:00" required>
		</div>
	</div>

	<div class="form-group">
		<label for="InicioDia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Día de inicio</label>

		<div class="col-sm-8">
			<input type='date' class="form-control" name='InicioDia' placeholder="Lunes" required>
		</div>
	</div>

	<div class="form-group">
		<label for="FinDia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Día de finalización</label>

		<div class="col-sm-8">
			<input type='date' class="form-control" name='FinDia' placeholder="Sábado" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Materia" class="col-sm-4 control-label" data-toggle="tooltip" title="">Asignatura: </label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Materia' placeholder="Asignatura" required>
		</div>
	</div>

	<div class="form-group">
		<label for="espacio_id" class="col-sm-4 control-label" data-toggle="tooltip" title="Espacio donde se ecuentra la asesoría">Espacio</label>

		<div class="col-sm-8">
			<input type="radio"  name="espacio_id" value="{{$espacio_id}}" checked> {{$espacio_tipo}}
		</div>
	</div>

  <div class="form-group">
		<h3 class="text-center">Evidencias: </h3>
	</div>

	<div class="form-group">
		<label for="Fotografias" class="col-sm-4 control-label" data-toggle="tooltip" title="Suba evidencias fotograficas">Fotografias</label>

		<div class="col-sm-8">
			<input type='file' class="form-control" name='Fotografias' id="Fotografias" accept=".jpg, .png, .jpeg">
		</div>
	</div>
@endsection
