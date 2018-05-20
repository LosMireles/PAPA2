@extends('layouts.ver')
@section('title')
   	Aulas
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EspacioController@create')}}"class="btn btn-warning">
            Agregar nuevo aula
        </a>
    </td>

    <h1 class="text-center">Listado de aula</h1>
@endsection

@section('cabeza_tabla')
   	<tr>
		<td>Codigo del aula</td>
		<td>Cantidad de equipo</td>
		<td>Cantidad de computadoras</td>
		<td>Capacidad</td>
        <td></td>
        <td></td>
   	</tr>
@endsection

@section('cuerpo_tabla')
   	@foreach ($aulas as $aula)
	<tr>
		<td>{{ $aula->Tipo }}</td>
		<td>{{ $aula->CantidadAV }}</td>
		<td>{{ $aula->CantidadEquipo }}</td>
		<td>{{ $aula->Capacidad }}</td>

        <!--Boton editar-->
        <td class="text-center">
            <a href="{{action('AulaController@edit', [ 'tipo' => $aula->Tipo])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <!--Boton borrar-->
        <td>
            {{ Form::open(['action' => ['AulaController@destroy', $aula->Tipo]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>

	</tr>
	@endforeach
@endsection

