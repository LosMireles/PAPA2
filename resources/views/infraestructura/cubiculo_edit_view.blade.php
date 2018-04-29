@extends('layouts.app')

@section('title', 'View Cubiculo')

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
			<td><a href = 'edit/{{ $cubiculo->IdCubiculo  }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
@endsection
