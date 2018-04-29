@extends('layouts.app')

@section('title', 'Cubiculo Management | Delete')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<form action = "/deleteCubiculo" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Cubiculo"/>
               </td>
            </tr>
         </table>
			
      </form>

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
         </tr>
         @endforeach
      </table>
@endsection

