@extends('layouts.ver')
@section('title')
    Eliminar espacio de asesorías
@endsection

@section('descripcion')
    <a href="/infraestructura/asesoria" class="btn btn-primary">Regresar</a>

    <form action = "/deleteAsesoria" method="POST" class="form-horizontal">
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

    <h1 class="text-center">Listado de espacios para asesorías</h1>
@endsection

@section('cabeza_tabla')
   <tr>
      <td>IdAsesoria</td>
      <td>Tipo</td>
      <td>Hora de inicio</td>
      <td>Hora de finalizacion</td>
      <td>Dia de inicio</td>
      <td>Dia de finalizacion</td>
      <td>Materia</td>
   </tr>
@endsection


@section('cuerpo_tabla')
   @foreach ($asesorias as $asesoria)
   <tr>
      <td>{{ $asesoria->IdAsesoria }}</td>
      <td>{{ $asesoria->Tipo }}</td>
      <td>{{ $asesoria->InicioHora }}</td>
      <td>{{ $asesoria->FinHora }}</td>
      <td>{{ $asesoria->InicioDia }}</td>
      <td>{{ $asesoria->FinDia }}</td>
      <td>{{ $asesoria->Materia }}</td>
    </tr>
    @endforeach
@endsection