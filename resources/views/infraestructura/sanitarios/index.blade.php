@extends('layouts.ver')
@section('title')
	Sanitarios
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EspacioController@create')}}"class="btn btn-warning">
            Agregar nuevo sanitario
        </a>
    </td>

    <h1 class="text-center">Listado de sanitario</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th>Tipo</th>
		<th>Hora de inicio del servicio</th>
		<th>Hora de fin del servicio</th>
		<th>Laborable desde</th>
		<th>Laborable hasta</th>
		<th>Limpieza</th>
		<th>Cantidad de personal de limpieza</th>
        <th></th>
        <th></th>
	</tr>
@endsection


@section('cuerpo_tabla')
	@foreach ($sanitarios as $sanitario)
		<tr>
            <td>{{ $sanitario->Tipo }}</td>
			<td>{{ $sanitario->InicioHora }}</td>
			<td>{{ $sanitario->FinHora }}</td>
			<td>{{ $sanitario->InicioDia }}</td>
			<td>{{ $sanitario->FinDia }}</td>
			<td>{{ $sanitario->Limpieza }}</td>
			<td>{{ $sanitario->CantidadPersonal }}</td>

            <!--Boton editar-->
            <td class="text-center">
                <a href="{{action('SanitarioController@edit', [ 'tipo' => $sanitario->Tipo])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

            <!--Boton borrar-->
            <td>
                {{ Form::open(['action' => ['SanitarioController@destroy', $sanitario->Tipo]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>

		</tr>
	@endforeach
@endsection

