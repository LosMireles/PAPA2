@extends('layouts.ver')
@section('title')
	ver espacios para asesorias
@endsection

@section('descripcion')
    <a href="/infraestructura" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('EspacioController@create')}}"class="btn btn-warning">
            Agregar nuevo asesoria
        </a>
    </td>

    <h1 class="text-center">Listado de asesoria</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<td data-toggle="tooltip" title="Identificador de la asesoria">Tipo</td>
		<td data-toggle="tooltip" title="Hora de inicio">Hora de inicio</td>
		<td data-toggle="tooltip" title="Hora de finalización">Hora de finalizacion</td>
		<td data-toggle="tooltip" title="Día de inicio">Dia de inicio</td>
		<td data-toggle="tooltip" title="Día de finalización">Dia de finalizacion</td>
		<td data-toggle="tooltip" title="Asignatura que se imparte">Materia</td>
        <td></td>
        <td></td>
		<td></td>
	</tr>
@endsection

@section('cuerpo_tabla')
	@foreach ($asesorias as $asesoria)
	<tr>
		<td>{{ $asesoria->Tipo }}</td>
		<td>{{ $asesoria->InicioHora }}</td>
		<td>{{ $asesoria->FinHora }}</td>
		<td>{{ $asesoria->InicioDia }}</td>
		<td>{{ $asesoria->FinDia }}</td>
		<td>{{ $asesoria->Materia }}</td>

        <!--Boton editar-->
        <td class="text-center">
            <a href="{{action('AsesoriaController@edit', [ 'tipo' => $asesoria->Tipo])}}" class="btn btn-warning">
                Editar
            </a>
        </td>

        <!--Boton borrar-->
        <td>
            {{ Form::open(['action' => ['AsesoriaController@destroy', $asesoria->Tipo]]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}
        </td>

				<!--Boton ver fotos-->
        <td class="text-center">
            <a href="{{action('AsesoriaController@viewImg', [ 'tipo' => $asesoria->Tipo])}}" class="btn btn-warning">
                Fotografías
            </a>
        </td>

	 </tr>
	 @endforeach
@endsection
