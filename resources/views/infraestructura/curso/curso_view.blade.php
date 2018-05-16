@extends('layouts.ver')
@section('title')
   ver cursos
@endsection

@section('descripcion')
   <a href="/infraestructura/curso" class="btn btn-primary">Regresar</a>
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

