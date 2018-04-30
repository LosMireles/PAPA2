@extends('layouts.app')

@section('title', 'Espacio Management | Delete')

@section('content')
	<a href="/infraestructura/espacio">Regresar</a>
	<form action = "/deleteEspacio" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Espacio"/>
               </td>
            </tr>
         </table>
			
      </form>

      <table border = 1>
         <tr>
            <td>Tipo</td>
            <td>Superficie</td>
            <td>Cantidad</td>
            <td>Clase</td>
         </tr>
         @foreach ($espacios as $espacio)
         <tr>
            <td>{{ $espacio->tipo }}</td>
			<td>{{ $espacio->superficie }}</td>
			<td>{{ $espacio->cantidad }}</td>
			<td>{{ $espacio->clase }}</td>
         </tr>
         @endforeach
      </table>
@endsection

