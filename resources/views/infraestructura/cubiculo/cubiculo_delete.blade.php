@extends('layouts.ver')
@section('title')
   Eliminar cubículo
@endsection

@section('descripcion')
   <a href="/infraestructura/cubiculo" class="btn btn-primary">Regresar</a>

   <form action = "/deleteCubiculo" method="POST" class="form-horizontal">
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

   <h1 class="text-center">Listado de cubículos</h1>
@endsection

@section('cabeza_tabla')
   <tr>
      <td>Código del cubículo</td>
      <td>Profesor</td>
      <td>Cantidad de equipo</td>
   </tr>
@endsection


@section('cuerpo_tabla')
  @foreach ($cubiculos as $cubiculo)
   <tr>
      <td>{{ $cubiculo->Tipo }}</td>
      <td>{{ $cubiculo->Profesor }}</td>
      <td>{{ $cubiculo->CantidadEquipo }}</td>
   </tr>
   @endforeach
@endsection