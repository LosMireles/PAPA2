@extends('layouts.ver')
@section('title')
	Sanitarios
@endsection

@section('descripcion')
    <a href="/inciso_9_1_13" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('SanitarioController@create')}}"class="btn btn-warning">
            Agregar nuevo sanitario
        </a>
    </td>

    <h1 class="text-center">Listado de sanitario</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th data-toggle="tooltip" title="Nombre clave para el sanitario donde se indica el tipo de sanitario (hombres o mujeres), piso en el que se encuentra, para que personas esta disponible (persona, alumnado).">nombre</th>
		<th data-toggle="tooltip" title="Hora de inicio al que esta disponible el sanitario en el día.">sexo</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	@foreach ($sanitarios as $sanitario)
		<tr>
            	<td>{{ $sanitario->nombre }}</td>
		<td>{{ $sanitario->sexo }}</td>


            <!--Boton editar-->
            <td class="text-center">
                <a href="{{action('SanitarioController@edit', [ 'nombre' => $sanitario->nombre])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

            <!--Boton borrar-->
            <td>
                {{ Form::open(['action' => ['SanitarioController@destroy', $sanitario->nombre]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>

						<!--Boton ver fotos-->
		        <td class="text-center">
		            <a href="{{action('SanitarioController@viewImg', [ 'nombre' => $sanitario->nombre])}}" class="btn btn-warning">
		                Fotografías
		            </a>
		        </td>

		</tr>
	@endforeach
@endsection
