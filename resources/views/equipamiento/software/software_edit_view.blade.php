@extends('layouts.ver')
@section('title')
    editar software
@endsection

@section('descripcion')
    <a href="/equipamiento/software" class="btn btn-primary">Regresar</a>
    <h1 class="text-center">Listado de software</h1>
@endsection

@section('cabeza_tabla')
    <tr>
        <th>Nombre</th>
        <th>Se cuenta con manual</th>
        <th>Licencia</th>
        <th>Lugar de obtención</th>
        <th>Clase</th>
        <th>Equipos</th>
        <th></th>
    </tr>
@endsection

@section('cuerpo_tabla')
    @section('cuerpo_tabla')
    @foreach ($softwares as $software)
        <tr>
            <td>{{ $software->nombre }}</td>
            <td>{{ $software->manualUsuario }}</td>
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
            <td class="text-center"><a href='editSoftware/{{ $software->nombre  }}'" class="btn btn-warning">Editar</a></td>
        </tr>
    @endforeach
@endsection
@endsection