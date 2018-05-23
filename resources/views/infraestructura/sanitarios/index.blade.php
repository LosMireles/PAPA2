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
		<th data-toggle="tooltip" title="Nombre clave para el sanitario donde se indica el tipo de sanitario (hombres o mujeres), piso en el que se encuentra, para que personas esta disponible (persona, alumnado).">Tipo</th>
		<th data-toggle="tooltip" title="Hora de inicio al que esta disponible el sanitario en el día.">Hora de inicio del servicio</th>
		<th data-toggle="tooltip" title="Hora a la que el sanitario deja de estar disponible en el día.">Hora de fin del servicio</th>
		<th data-toggle="tooltip" title="Primer día de la semana en que el sanitario esta disponible.">Laborable desde</th>
		<th data-toggle="tooltip" title="Último día de la semana en que el sanitario esta disponible.">Laborable hasta</th>
		<th data-toggle="tooltip" title="Rango de 0 a 5 donde califique el nivel de limpieza del sanitario (siendo 5 el más alto).">Limpieza</th>
		<th data-toggle="tooltip" title="Cantidad de personal dedicado a dar mantenimiento al sanitario.">Cantidad de personal de limpieza</th>
        <th></th>
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

						<!--Boton ver fotos-->
		        <td class="text-center">
		            <a href="{{action('SanitarioController@viewImg', [ 'tipo' => $sanitario->Tipo])}}" class="btn btn-warning">
		                Fotografías
		            </a>
		        </td>

		</tr>
	@endforeach
@endsection
