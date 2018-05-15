@extends('layouts.ver')
@section('title')
    editar espacios para asesorias
@endsection

@section('descripcion')
    <a href="{{ url('/asignaturas') }}" class="btn btn-primary">Regresar</a>
    <h1 class="text-center">Listado de asignaturas</h1>
@endsection

@section('cabeza_tabla')
    <tr>
		<th>Nombre de la asignatura</th>
		<th>Descripción de la asignatura</th>
		<th></th>
	</tr>
@endsection

@section('cuerpo_tabla')
    @foreach($asignaturas as $asignatura)
		<tr>
			<td>{{$asignatura->nombre}}</td>
			<td>{{$asignatura->descripcion}}</td>
			<td class="text-center"><a href="{{ url('/asignaturas/actualizar_asignatura/'.$asignatura->id ) }}" class="btn btn-warning">Editar</a></td>
		</tr>
    @endforeach
@endsection