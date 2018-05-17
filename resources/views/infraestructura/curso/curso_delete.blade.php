@extends('layouts.ver')
@section('title')
	Eliminar curso
@endsection

@section('descripcion')
	<a href="/infraestructura/curso" class="btn btn-primary">Regresar</a>

	<form action="/deleteCurso" method="POST" class="form-horizontal">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<div class="form-group">
			<label for="nombre" class="col-sm-2 control-label"> Nombre del curso: </label>

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

	<h1 class="text-center">Listado de cursos</h1>
@endsection

@section('cabeza_tabla')
  	<tr>
   		<td>Nombre</td>
		<td>Período</td>
		<td>Grupo</td>
		<td>Numero de Estudiantes</td>
		<td>Tipo de Aula</td>
		<td>Tipo</td>
        <td>Espacios</td>
   </tr>
@endsection


@section('cuerpo_tabla')
  @foreach ($cursos as $curso)
	<tr>
		<td>{{ $curso->nombre }}</td>
		<td>{{ $curso->periodo }}</td>
		<td>{{ $curso->grupo }}</td>
		<td>{{ $curso->noEstudiantes }}</td>
		<td>{{ $curso->tipoAula }}</td>
		<td>{{ $curso->tipo }}</td>

        <td>
            @if(!empty($curso->espacios))
                @foreach($curso->espacios as $espacio)
                    {{$espacio->tipo}} <br>
                @endforeach
            @endif
        </td>

	</tr>
	@endforeach
@endsection

