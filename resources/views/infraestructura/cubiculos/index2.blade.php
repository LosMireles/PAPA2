@extends('layouts.ver')
@section('title')
   Cubículos
@endsection

@section('descripcion')
    <h1 class="text-center">Listado de cubículos</h1>
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
	</tr>
	@endforeach
@endsection
