@extends('layouts.ver')
@section('title')
	ver asignaturas
@endsection

@section('descripcion')
    <a href="/" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('AsignaturaController@create')}}"class="btn btn-warning">
            Agregar nueva asignatura
        </a>
    </td>

    <h1 class="text-center">Listado de asignaturas</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th>Nombre de la asignatura</th>
		<th>Descripción de la asignatura</th>
        <th>Curso de la asignatura</th>
	</tr>
@endsection

@section('cuerpo_tabla')
	@foreach($asignaturas as $asignatura)
		<tr>
			<td>{{$asignatura->nombre}}</td>
			<td>{{$asignatura->descripcion}}</td>
            <td>{{$asignatura->curso->nombre}}</td>

            <td class="text-center">
                <a href="{{action('AsignaturaController@edit', [ 'nombre' => $asignatura->nombre])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

            <td>
                {{ Form::open(['action' => ['AsignaturaController@destroy', $asignatura->nombre]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>

		</tr>
	@endforeach
@endsection

