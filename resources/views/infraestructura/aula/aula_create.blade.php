@extends('layouts.insertar')

@section('title')
	 insertar un aula
@endsection

@section('descripcion')
	<a  href="/infraestructura/aula" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Formulario para agregar un aula</h1>
@endsection

@section('accion')
	 action="/CrearAula"
@endsection

@section('contenido_formulario')
	<div class="form-group">
		<label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Nombre escrito en las puertas">Código del aula</label>

		<div class="col-sm-8">
			<input type='text' name='Tipo' class="form-control" value='<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>' required>
		</div>
	</div>

	<div class="form-group">
		<label for="Capacidad" class="col-sm-4 control-label" data-toggle="tooltip" title="Capacidad máxima del aula">Capacidad máxima de personas</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Capacidad' id="Capacidad" placeholder="10" required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadAV" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de equipo audiovisual hay en el aula">Cantidad de equipo audiovisual</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadAV' id="CantidadAV" placeholder="1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="CantidadEquipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de computadoras hay en el aula">Cantidad de computadoras</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='CantidadEquipo' id="CantidadEquipo" placeholder="1" required>
		</div>
	</div>

	<div class="form-group">
		<label for="" class="col-sm-4 control-label" data-toggle="tooltip" title=""></label>

		<div class="col-sm-8">

		</div>
	</div>

	<div class="form-group">
		<h3 class="text-center">En una escala del 1 al 4, califique la calidad de:</h3>
	</div>

	<div class="form-group">
		<label for="Pizarron" class="col-sm-4 control-label" data-toggle="tooltip" title="Calidad en la que se encuentra el pizarrón">Pizarrón</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Pizarron' id="Pizarron" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Illuminacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Calidad de la Illuminación en el aula">Illuminación</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Illuminacion' id="Illuminacion" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="AislamientoR" class="col-sm-4 control-label" data-toggle="tooltip" title="Que tan aislado está del ruido anterior">Aislamiento al ruido</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='AislamientoR' id="AislamientoR" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Ventilacion" class="col-sm-4 control-label" data-toggle="tooltip" title="Califique la ventilación en el aula">Ventilación</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Ventilacion' id="Ventilacion" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Temperatura" class="col-sm-4 control-label" data-toggle="tooltip" title="Califique la calidad de la temperatura en el aula">Temperatura</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Temperatura' id="Temperatura" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Espacio" class="col-sm-4 control-label" data-toggle="tooltip" title="Califique el espacio en el aula">Espacio</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Espacio' id="Espacio" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Mobilario" class="col-sm-4 control-label" data-toggle="tooltip" title="Califique la calidad del mobiliari en el aula">Mobiliario</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Mobilario' id="Mobilario" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<label for="Conexiones" class="col-sm-4 control-label" data-toggle="tooltip" title="Califique la calidad de las conexiones de todo tipo en el aula">Conexiones</label>

		<div class="col-sm-8">
			<input type='text' class="form-control" name='Conexiones' id="Conexiones" placeholder="4" required>
		</div>
	</div>

	<div class="form-group">
		<h3 class="text-center">Mencione si el aula tiene: </h3>
	</div>

	<div class="form-group">
		<label for="SillasPaleta" class="col-sm-4 control-label">Sillas de paleta</label>
		<div class="col-sm-8">
			<input type="checkbox" name="SillasPaleta" value="1"/>
		</div>
	</div>

	<div class="form-group">
		<label for="MesasTrabajo" class="col-sm-4 control-label">Mesas de trabajo</label>
		<div class="col-sm-8">
			<input type="checkbox" name="MesasTrabajo" value="1" />
		</div>
	</div>

	<div class="form-group">
		<label for="Isotopica" class="col-sm-4 control-label" data-toggle="tooltip" title="Visión escalonada">Isotópica</label>
		<div class="col-sm-8">
			<input type="checkbox" name="Isotopica" value="1">
		</div>
	</div>

	<div class="form-group">
		<label for="Estrado" class="col-sm-4 control-label" data-toggle="tooltip" title="Elevación para el profesor">Estrado</label>
		<div class="col-sm-8">
			<input type="checkbox" name="Estrado" value="1" >
		</div>
	</div>
@endsection
