@extends('layouts.actualizar')

@section('title')
   editar cubículo <?php echo$cubiculo->Tipo; ?>
@endsection

@section('descripcion')
    <a href="{{action('CubiculoController@index')}}" class="btn btn-primary">
        Regresar
    </a>
	<h1 class="text-center">Edición del cubículo {{$cubiculo->Tipo}}</h1>
@endsection

@section('accion')
    action = "{{action('CubiculoController@update', $cubiculo->Tipo)}}"
@endsection

@section('formopen')
    {{Form::open(['action' => ['CubiculoController@update', $cubiculo->Tipo],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
<div class="form-group">
      <label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Número del cubículo">Código del cubículo</label>

      <div class="col-sm-8">
         <input type='text' class="form-control" name='Tipo' value = '<?php echo$cubiculo->Tipo; ?>' required>
      </div>
   </div>

   <div class="form-group">
      <label for="Profesor" class="col-sm-4 control-label" data-toggle="tooltip" title="El encargado del cubículo">Profesor</label>

      <div class="col-sm-8">
         <input type='text' class="form-control" name='Profesor' id="Profesor" placeholder="Nombre" required value = '<?php echo$cubiculo->Profesor; ?>'>
      </div>
   </div>

   <div class="form-group">
      <label for="CantidadEquipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de computadoras hay en el cubículo">Cantidad de equipo</label>

      <div class="col-sm-8">
         <input type='text' class="form-control" name='CantidadEquipo' id="CantidadEquipo" placeholder="1" required value = '<?php echo$cubiculo->CantidadEquipo; ?>'>
      </div>
   </div>
@endsection

