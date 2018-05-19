@extends('layouts.ver')
@section('title')
   Cubículos
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('CubiculosController@create')}}"class="btn btn-warning">
            Agregar nuevo cubiculos
        </a>
    </td>

    <h1 class="text-center">Listado de cubiculos</h1>
@endsection

@section('cabeza_tabla')
   <tr>
   		<td>Código del cubículo</td>
        <td>Profesor</td>
        <td>Cantidad de equipo</td>
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
            <a href="{{action('CubiculosController@edit', [ 'Tipo' => $cubiculos->Tipo])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <!--Boton borrar-->
        <td>
            {{ Form::open(['action' => ['CubiculosController@destroy', $cubiculos->Tipo]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>


	</tr>
	@endforeach
@endsection

