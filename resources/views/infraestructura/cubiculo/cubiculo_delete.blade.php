@extends('layouts.app')

@section('title', 'Cubiculo Management | Delete')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<form action = "/deleteCubiculo" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td><div class="tooltip">Codigo del cubiculo<span class="tooltiptext">Numero del cubiculo</span></div></td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Borrar Cubiculo"/>
               </td>
            </tr>
         </table>
			
      </form>

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

