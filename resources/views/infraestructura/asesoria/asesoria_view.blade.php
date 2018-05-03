@extends('layouts.app')

@section('title', 'View Asesoria')

@section('content')
	<a href="/infraestructura/asesoria">Regresar</a>
	<table border = 1>
         <tr>
			 <td>IdAsesoria</td>
             <td>InicioHora</td>
 			 <td>FinHora</td>
			 <td>InicioDia</td>
 			 <td>FinDia</td>
			 <td>Materia</td>
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
