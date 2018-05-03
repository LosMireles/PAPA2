@extends('layouts.app')

@section('title', 'Sanitario Management | Delete')

@section('content')
	<a href="/infraestructura/sanitario">Regresar</a>
	<form action = "/deleteSanitario" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Sanitario"/>
               </td>
            </tr>
         </table>

      </form>

      <table border = 1>
         <tr>
            <td>IdSanitario</td>
            <td>Tipo</td>
            <td>InicioHora</td>
            <td>FinHora</td>
            <td>InicioDia </td>
						<td>FinDia </td>
						<td> Limpieza </td>
						<td> CantidadPersonal </td>
         </tr>
         @foreach ($sanitarios as $sanitario)
         <tr>
						<td>{{ $sanitario->IdSanitario }}</td>
						<td>{{ $sanitario->Tipo }}</td>
						<td>{{ $sanitario->InicioHora }}</td>
						<td>{{ $sanitario->FinHora }}</td>
						<td>{{ $sanitario->InicioDia }}</td>
						<td>{{ $sanitario->FinDia }}</td>
						<td>{{ $sanitario->Limpieza }}</td>
						<td>{{ $sanitario->CantidadPersonal }}</td>
         </tr>
         @endforeach
      </table>
@endsection
