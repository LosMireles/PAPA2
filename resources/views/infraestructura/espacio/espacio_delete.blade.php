@extends('layouts.ver')
@section('title')
	Eliminar espacio
@endsection

@section('descripcion')
 	<a href="/infraestructura/espacio" class="btn btn-primary">Regresar</a>

	<form action="/deleteEspacio" method="POST" class="form-horizontal">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<div class="form-group">
			<label for="tipo" class="col-sm-2 control-label" data-toggle="tooltip" title="Un identificador único (por ejemplo A202)"> Nombre espacio[?]: </label>

			<div class="col-sm-10">
            	<input type='text' name='tipo' class="form-control" placeholder="Nombre" required>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Borrar</button>
			</div>
		</div>
	</form>

  	<h1 class="text-center">Listado de espacios</h1>
@endsection

@section('cabeza_tabla')
  <tr>
    <th >Nombre del espacio</th>
    <th>Superficie</th>
    <th>Cantidad</th>
    <th>Clase</th>
    <th>Cursos</th>
  </tr>
@endsection


@section('cuerpo_tabla')
  @foreach ($espacios as $espacio)
    <tr>
        <td>{{ $espacio->tipo }}</td>
        <td>{{ $espacio->superficie }}</td>
        <td>{{ $espacio->cantidad }}</td>
        <td>{{ $espacio->clase }}</td>

        <td>
            @if(!empty($espacio->cursos))
                @foreach($espacio->cursos as $curso)
                    {{$curso->nombre}} <br>
                @endforeach
            @endif
        </td>

    </tr>
  @endforeach
@endsection

