@extends('layouts.ver')
@section('title')
   editar cubículos
@endsection

@section('descripcion')
   <a href="/infraestructura/cubiculo" class="btn btn-primary">Regresar</a>
   <h1 class="text-center">Listado de cubículos</h1>
@endsection

@section('cabeza_tabla')
   <tr>
        <td>Código del cubículo</td>
        <td>Profesor</td>
        <td>Cantidad de equipo</td>
        <td></td>
   </tr>
@endsection

@section('cuerpo_tabla')
   @foreach ($cubiculos as $cubiculo)
   <tr>
      <td>{{ $cubiculo->Tipo }}</td>
      <td>{{ $cubiculo->Profesor }}</td>
      <td>{{ $cubiculo->CantidadEquipo }}</td>
      <td class="text-center"><a href = 'editCubiculo/{{ $cubiculo->IdCubiculo }}' class="btn btn-warning">Editar</a></td>
   </tr>
   @endforeach
@endsection
