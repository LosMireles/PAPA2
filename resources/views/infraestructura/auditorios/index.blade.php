@extends('layouts.ver')
@section('title')
	Auditorios
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('AuditorioController@create')}}"class="btn btn-warning">
            Agregar nuevo auditorio
        </a>
    </td>

    <h1 class="text-center">Listado de auditorio</h1>
@endsection

@section('cabeza_tabla')
   	<tr>
		<td data-toggle="tooltip" title="Nombre del auditorio">Nombre</td>
		<td data-toggle="tooltip" title="Capacidad máxima de personas que soporta el auditorio.">Capacidad</td>

		<td></td>
   	</tr>
@endsection

@section('cuerpo_tabla')
   	@foreach ($auditorios as $auditorio)
	<tr>
		<td>{{ $auditorio->nombre }}</td>
		<td>{{ $auditorio->Capacidad }}</td>

        <!--Boton editar-->
        <td class="text-center">
            <a href="{{action('AuditorioController@edit', [ 'nombre' => $auditorio->nombre])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <!--Boton borrar-->
        <td>
            {{ Form::open(['action' => ['AuditorioController@destroy', $auditorio->nombre]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>
<!-- 
				
        <td class="text-center">
            <a href="{{action('AuditorioController@viewImg', [ 'nombre' => $auditorio->nombre])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>
-->
	</tr>
	@endforeach
@endsection
