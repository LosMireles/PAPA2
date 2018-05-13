@extends('layouts.ver')
@section('title')
    editar espacios para asesorias
@endsection

@section('descripcion')
    <a href="/infraestructura/asesoria" class="btn btn-primary">Regresar</a>
    <h1 class="text-center">Listado de espacios para asesorias</h1>
@endsection

@section('cabeza_tabla')
    <tr>
        <td>IdAsesoria</td>
        <td>Tipo</td>
        <td>Hora de inicio</td>
        <td>Hora de finalizacion</td>
        <td>Dia de inicio</td>
        <td>Dia de finalizacion</td>
        <td>Materia</td>
        <td></td>
    </tr>
@endsection

@section('cuerpo_tabla')
    @foreach ($asesorias as $asesoria)
    <tr>
        <td>{{ $asesoria->IdAsesoria }}</td>
        <td>{{ $asesoria->Tipo }}</td>
        <td>{{ $asesoria->InicioHora }}</td>
        <td>{{ $asesoria->FinHora }}</td>
        <td>{{ $asesoria->InicioDia }}</td>
        <td>{{ $asesoria->FinDia }}</td>
        <td>{{ $asesoria->Materia }}</td>
        <td class="text-center"><a href = 'editAsesoria/{{ $asesoria->IdAsesoria }}' class="btn btn-warning">Editar</a></td>
    </tr>
    @endforeach
@endsection