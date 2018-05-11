@extends('layouts.app')

@section('title', 'View Asesoria')

@section('content')
	<a href="/infraestructura/asesoria">Regresar</a>
	<table border = 1>
         <tr>
			 <td><div class="tooltip">IdAsesoria<span class="tooltiptext">Numero de entrada en base de datos </span></div></td>
 			<td><div class="tooltip">Tipo<span class="tooltiptext">Identificador propio de la asesoria</span></div></td>
             <td>Hora de inicio</td>
 			<td>Hora de finalizacion</td>
 			<td>Dia de inicio</td>
 			<td>Dia de finalizacion</td>
 			<td><div class="tooltip">Materia<span class="tooltiptext">Clave de Materia o nombre de la misma</span></div></td>
         </tr>
         @foreach ($asesorias as $asesoria)
         <tr>
			 <td>{{ $asesoria->IdAsesoria }}</td>
 			<td>{{ $asesoria->InicioHora }}</td>
 			<td>{{ $asesoria->FinHora }}</td>
 			<td>{{ $asesoria->InicioDia }}</td>
 			<td>{{ $asesoria->FinDia }}</td>
 			<td>{{ $asesoria->Materia }}</td>
         </tr>
         @endforeach
      </table>
@endsection
