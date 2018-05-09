@extends('layouts.app')

@section('title', 'Aula Management | Delete')

@section('content')
	<a href="/infraestructura/aula">Regresar</a>
	<form action = "/deleteAula" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Codigo del aula</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Aula"/>
               </td>
            </tr>
         </table>
			
      </form>

      <table border = 1>
         <tr>
            	<td><div class="tooltip">Codigo del aula<span class="tooltiptext">Nombre escrito en las puertas</span></div></td>
	    	<td><div class="tooltip">Cantidad de equipo.<span class="tooltiptext">Cantidad de equipo audiovisual hay en el aula</span></td>
	    	<td><div class="tooltip">Cantidad de computadoras.<span class="tooltiptext">Cantidad de computadoras hay en el aula</span></td>
	    	<td><div class="tooltip">Capacidad.<span class="tooltiptext">Capacidad maxima del aula</span> </td>
         </tr>
         @foreach ($aulas as $aula)
         <tr>
            	<td>{{ $aula->Tipo }}</td>
		<td>{{ $aula->CantidadAV }}</td>
		<td>{{ $aula->CantidadEquipo }}</td>
		<td>{{ $aula->Capacidad }}</td>
         </tr>
         @endforeach
      </table>
@endsection

