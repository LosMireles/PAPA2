@extends('layouts.ver')
@section('title')
   Cursos
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('CursoController@create')}}"class="btn btn-warning">
            Agregar nuevo curso
        </a>
    </td>

    <h1 class="text-center">Listado de curso</h1>
@endsection

@section('cabeza_tabla')
   <tr>
   		<th>Nombre</th>
		<th>Período</th>
		<th>Grupo</th>
		<th>Numero de Estudiantes</th>
		<th>Tipo de Aula</th>
		<th>Pertenencia</th>
        <th>Espacios</th>
        <th></th>
        <th></th>
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
		<td>{{ $curso->pertenencia }}</td>

        <td>
            @if(!empty($curso->espacios))
                @foreach($curso->espacios as $espacio)
                    {{$espacio->tipo}} <br>
                @endforeach
            @endif
        </td>

        <td class="text-center">
            <a href="{{action('CursoController@edit', [ 'nombre' => $curso->nombre])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <td>
            {{ Form::open(['action' => ['CursoController@destroy', $curso->nombre]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>

	</tr>
	@endforeach
@endsection

