@extends('layouts.ver')
@section('title')
   Eliminar aula
@endsection

@section('descripcion')
   <a href="/infraestructura/aula" class="btn btn-primary">Regresar</a>

   <form action = "/deleteAula" method="POST" class="form-horizontal">
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

   <h1 class="text-center">Listado de aulas</h1>
@endsection

@section('cabeza_tabla')
   <tr>
      <td>Codigo del aula</td>
      <td>Cantidad de equipo</td>
      <td>Cantidad de computadoras</td>
      <td>Capacidad</td>
   </tr>
@endsection


@section('cuerpo_tabla')
   @foreach ($aulas as $aula)
   <tr>
      <td>{{ $aula->Tipo }}</td>
      <td>{{ $aula->CantidadAV }}</td>
      <td>{{ $aula->CantidadEquipo }}</td>
      <td>{{ $aula->Capacidad }}</td>
   </tr>
   @endforeach
@endsection