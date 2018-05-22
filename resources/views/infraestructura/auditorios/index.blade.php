@extends('layouts.ver')
@section('title')
	Auditorios
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EspacioController@create')}}"class="btn btn-warning">
            Agregar nuevo auditorio
        </a>
    </td>

    <h1 class="text-center">Listado de auditorio</h1>
@endsection

@section('cabeza_tabla')
   	<tr>
		<td>Tipo</td>
		<td>CantidadEquipo</td>
		<td>CantidadAV</td>
		<td>Capacidad</td>
		<td>CantidadSanitarios</td>
        <td></td>
        <td></td>
		<td></td>
   	</tr>
@endsection

@section('cuerpo_tabla')
   	@foreach ($auditorios as $auditorio)
	<tr>
		<td>{{ $auditorio->Tipo }}</td>
		<td>{{ $auditorio->CantidadEquipo }}</td>
		<td>{{ $auditorio->CantidadAV }}</td>
		<td>{{ $auditorio->Capacidad }}</td>
		<td>{{ $auditorio->CantidadSanitarios }}</td>

        <!--Boton editar-->
        <td class="text-center">
            <a href="{{action('AuditorioController@edit', [ 'tipo' => $auditorio->Tipo])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <!--Boton borrar-->
        <td>
            {{ Form::open(['action' => ['AuditorioController@destroy', $auditorio->Tipo]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>

				<!--Boton ver fotos-->
        <td class="text-center">
            <a href="{{action('AuditorioController@viewImg', [ 'tipo' => $auditorio->Tipo])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>

	</tr>
	@endforeach
@endsection
