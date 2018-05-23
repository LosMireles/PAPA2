<?php use App\Http\Controllers\SoftwareController;?>
@extends('layouts.ver')
@section('title')
    Softwares
@endsection

@section('descripcion')
    <a href="/equipamiento" class="btn btn-primary">
        Regresar
    </a>

    <td class="text-center">
        <a href="{{action('SoftwareController@create')}}"class="btn btn-warning">
            Agregar nuevo software
        </a>
    </td>

    <h1 class="text-center">Listado de software</h1>
@endsection


@section('cabeza_tabla')
    <tr>
        <th data-toggle="tooltip" title="Nombre del software">Nombre</th>
        <th data-toggle="tooltip" title="Se cuenta con manual de uso para el software">Se cuenta con manual</th>
        <th data-toggle="tooltip" title="Tipo de licencia que se tiene del software (por ejemplo, libre)">Licencia</th>
        <th data-toggle="tooltip" title="Se refiere a donde se consiguio el software">Lugar de obtención</th>
        <th data-toggle="tooltip" title="Si es un lenguaje, una librería o una herramienta CASE">Clase</th>
        <th data-toggle="tooltip" title="Equipos que tienen instalado el software">Equipos</th>
        <th data-toggle="tooltip" title="Asignaturas que usan el software">Asignaturas</th>
        <th></th>
        <th></th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach ($softwares as $software)
        <tr>
            <td>{{ $software->nombre }}</td>
            @if($software->manualUsuario)
                <td>Sí</td>
            @else
                <td>No</td>
            @endif
            <td>{{ $software->licencia }}</td>
            <td>{{ $software->disponibilidad }}</td>
            <td>{{ $software->clase }}</td>

            <td>
                @if(!empty($software->equipos))
                    @foreach($software->equipos as $equipo)
                        {{$equipo->serial}} <br>
                    @endforeach
                @endif
            </td>

            <td>
                @if(!empty($software->asignaturas))
                    @foreach($software->asignaturas as $asignatura)
                        {{$asignatura->nombre}} <br>
                    @endforeach
                @endif
            </td>

            <td class="text-center">
                <a href="{{action('SoftwareController@edit', [ 'nombre' => $software->nombre])}}" class="btn btn-warning">
                    Editar
                </a>
            </td>

            <td>
                {{ Form::open(['action' => ['SoftwareController@destroy', $software->nombre]]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
                {{ Form::close() }}
            </td>

        </tr>
    @endforeach
@endsection

