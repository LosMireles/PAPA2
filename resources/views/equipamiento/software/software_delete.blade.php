@extends('layouts.app')

@section('title', 'Software Management | Delete')

@section('content')
	<a href="/equipamiento/software">Regresar</a>
	<form action = "/deleteSoftware" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>nombre</td>
               <td><input type='text' name='nombre' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Software"/>
               </td>
            </tr>
         </table>

      </form>

      <table border = 1>
         <tr>
            <td>nombre</td>
            <td>manual usuario</td>
            <td>licencia</td>
            <td>disponibilidad</td>
            <td>clase</td>
            <td>serial</td>
         </tr>
         @foreach ($softwares as $software)
         <tr>
            <td>{{ $software->nombre }}</td>
            <td>{{ $software->manualUsuario }}</td>
            <td>{{ $software->licencia }}</td>
			<td>{{ $software->disponibilidad }}</td>
			<td>{{ $software->clase }}</td>
			<td>{{ $software->serial }}</td>
         </tr>
         @endforeach
      </table>
@endsection

