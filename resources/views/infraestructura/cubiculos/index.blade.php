@extends('layouts.ver')
@section('title')
   Cubículos
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EspacioController@create')}}"class="btn btn-warning">
            Agregar nuevo cubiculos
        </a>
    </td>

    <h1 class="text-center">Listado de cubículos</h1>
@endsection

@section('cabeza_tabla')
   <tr>
   		<td data-toggle="tooltip" title="Número del cubículo">Código del cubículo</td>
        <td data-toggle="tooltip" title="El encargado del cubículo">Profesor</td>
        <td data-toggle="tooltip" title="Cantidad de computadoras hay en el cubículo">Cantidad de equipo</td>
        <td></td>
        <td></td>
        <td></td>
   </tr>
@endsection

@section('cuerpo_tabla')
   @foreach ($cubiculos as $cubiculo)
	<tr>
		<td>{{ $cubiculo->Tipo }}</td>
		<td>{{ $cubiculo->Profesor }}</td>
		<td>{{ $cubiculo->CantidadEquipo }}</td>

        <!--Boton editar-->
        <td class="text-center">
            <a href="{{action('CubiculoController@edit', [ 'tipo' => $cubiculo->Tipo])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <!--Boton borrar-->
        <td>
            {{ Form::open(['action' => ['CubiculoController@destroy', $cubiculo->Tipo]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>

        <!--Boton ver fotos-->
        <td class="text-center">
            <a href="{{action('CubiculoController@viewImg', [ 'tipo' => $cubiculo->Tipo])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>

	</tr>
	@endforeach
@endsection
