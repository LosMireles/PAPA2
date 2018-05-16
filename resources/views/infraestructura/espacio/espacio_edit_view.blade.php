@extends('layouts.ver')
@section('title')
  	editar espacios
@endsection

@section('descripcion')
  	<a href="/infraestructura/espacio" class="btn btn-primary">Regresar</a>
  	<h1 class="text-center">Listado de espacios</h1>
@endsection

@section('cabeza_tabla')
  	<tr>
		<th>Nombre del espacio</th>

		<th>Superficie</th>

		<th>Cantidad</th>

		<th>Clase</th>

        <th>Cursos</th>

		<th></th>
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

	  <td class="text-center"><a href = 'editEspacio/{{ $espacio->tipo  }}' class="btn btn-warning">Editar</a></td>
	</tr>
  @endforeach
@endsection
