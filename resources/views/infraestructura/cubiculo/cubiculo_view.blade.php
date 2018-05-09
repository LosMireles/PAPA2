@extends('layouts.app')

@section('title', 'View Cubiculo')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<table border = 1>
         <tr>
            <td><div class="tooltip">Codigo del cubiculo<span class="tooltiptext">Numero del cubiculo</span></div></td>
            <td><div class="tooltip">Profesor<span class="tooltiptext">El encargado del cubiculo</span></div></td>
            <td><div class="tooltip">Cantidad de equipo.<span class="tooltiptext">Cantidad de computadoras hay en el cubiculo</span></div></td>
         </tr>
         @foreach ($cubiculos as $cubiculo)
         <tr>
            		<td>{{ $cubiculo->Tipo }}</td>
			<td>{{ $cubiculo->Profesor }}</td>
			<td>{{ $cubiculo->CantidadEquipo }}</td>
         </tr>
         @endforeach
      </table>
@endsection
