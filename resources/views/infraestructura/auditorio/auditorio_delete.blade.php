@extends('layouts.app')

@section('title', 'Auditorio Management | Delete')

@section('content')
	<a href="/infraestructura/auditorio">Regresar</a>
	<form action = "/deleteAuditorio" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Auditorio"/>
               </td>
            </tr>
         </table>

      </form>

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
