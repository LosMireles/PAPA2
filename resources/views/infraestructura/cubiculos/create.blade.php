@extends('layouts.insertar')

@section('title')
   Agregar cubículo
@endsection

@section('descripcion')
    <a href="{{action('CubiculoController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Formulario para agregar un cubiculo</h1>
@endsection

@section('accion')
   action = "{{action('CubiculoController@store')}}"
@endsection

@section('contenido_formulario')
   <div class="form-group">
      <label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Número del cubículo">Código del cubículo</label>

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
      <label for="Profesor" class="col-sm-4 control-label" data-toggle="tooltip" title="El encargado del cubículo">Profesor</label>

      <div class="col-sm-8">
         <input type='text' class="form-control" name='Profesor' id="Profesor" placeholder="Nombre" required>
      </div>
   </div>

   <div class="form-group">
      <label for="CantidadEquipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de computadoras hay en el cubículo">Cantidad de equipo</label>

      <div class="col-sm-8">
         <input type='text' class="form-control" name='CantidadEquipo' id="CantidadEquipo" placeholder="1" required>
      </div>
   </div>
@endsection

