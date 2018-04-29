@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<table border = 1>
         <tr>
            <td>IdCubiculo</td>
            <td>Tipo</td>
            <td>Porfesor</td>
            <td>Cantidad equipo</td>
         </tr>
         @foreach ($cubiculos as $cubiculo)
         <tr>
            <td>{{ $cubiculo->IdCubiculo }}</td>
            <td>{{ $cubiculo->Tipo }}</td>
			<td>{{ $cubiculo->Profesor }}</td>
			<td>{{ $cubiculo->CantidadEquipo }}</td>
			<td><a href = 'delete/{{ $cubiculo->IdCubiculo  }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
@endsection
