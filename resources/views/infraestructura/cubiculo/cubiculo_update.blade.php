@extends('layouts.insertar')

@section('title')
   editar cubículo <?php echo$cubiculos->Tipo; ?>
@endsection

@section('descripcion')
   <a href="/editarCubiculo" class="btn btn-primary">Regresar</a>
   <h1 class="text-center">Formulario para editar un cubículo</h1>
@endsection

@section('accion')
   action = "/editCubiculo/<?php echo $cubiculos->IdCubiculo; ?>"
@endsection

@section('contenido_formulario')
<div class="form-group">
      <label for="Tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Número del cubículo">Código del cubículo</label>
      
      <div class="col-sm-8">
         <input type='text' class="form-control" name='Tipo' value = '<?php echo$cubiculos->Tipo; ?>' required>
      </div>
   </div>

   <div class="form-group">
      <label for="Profesor" class="col-sm-4 control-label" data-toggle="tooltip" title="El encargado del cubículo">Profesor</label>
      
      <div class="col-sm-8">
         <input type='text' class="form-control" name='Profesor' id="Profesor" placeholder="Nombre" required value = '<?php echo$cubiculos->Profesor; ?>'>
      </div>
   </div>

   <div class="form-group">
      <label for="CantidadEquipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Cantidad de computadoras hay en el cubículo">Cantidad de equipo</label>
      
      <div class="col-sm-8">
         <input type='text' class="form-control" name='CantidadEquipo' id="CantidadEquipo" placeholder="1" required value = '<?php echo$cubiculos->CantidadEquipo; ?>'>
      </div>
   </div>
@endsection