@extends('layouts.app')

@section('title', 'View Auditorio')

@section('content')
	<a href="/infraestructura/auditorio">Regresar</a>
	<table border = 1>
   	 <tr>
   		<td>IdAuditorio</td>
   	   <td>Tipo</td>
   		<td>CantidadEquipo</td>
   	   <td>CantidadAV</td>
   	   <td>Capacidad</td>
   	   <td>CantidadSanitarios</td>
   	 </tr>
   	 @foreach ($auditorios as $auditorio)
   	 <tr>
   		<td>{{ $auditorio->IdAuditorio }}</td>
   	   <td>{{ $auditorio->Tipo }}</td>
   	   <td>{{ $auditorio->CantidadEquipo }}</td>
   	   <td>{{ $auditorio->CantidadAV }}</td>
   	   <td>{{ $auditorio->Capacidad }}</td>
   	   <td>{{ $auditorio->CantidadSanitarios }}</td>
   	 </tr>
   	@endforeach
    </table>
@endsection
