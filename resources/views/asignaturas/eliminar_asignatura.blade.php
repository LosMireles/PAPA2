@extends('layouts.ver')
@section('title')
    Eliminar asignaturas
@endsection

@section('descripcion')
    <a href="{{ url('/asignaturas') }}" class="btn btn-primary">Regresar</a>

    <form action="{{ url('/asignaturas/eliminar_asignatura/eliminar') }}" method="POST" class="form-horizontal">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <div class="form-group">
             <label for="nombre" class="col-sm-2 control-label">Nombre de la asignatura: </label>

             <div class="col-sm-10">
                  <input type='text' name='nombre' class="form-control" placeholder="Nombre" required>
             </div>
         </div>

         <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Borrar</button>
             </div>
         </div>
    </form>

    <h1 class="text-center">Listado de asignaturas</h1>
@endsection

@section('cabeza_tabla')
  	<tr>
		<th>Nombre de la asignatura</th>
		<th>Descripción de la asignatura</th>
	</tr>
@endsection


@section('cuerpo_tabla')
   @foreach($asignaturas as $asignatura)
		<tr>
			<td>{{$asignatura->nombre}}</td>
			<td>{{$asignatura->descripcion}}</td>
		</tr>
	@endforeach
@endsection