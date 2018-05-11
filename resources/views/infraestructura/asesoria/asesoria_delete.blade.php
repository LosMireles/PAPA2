@extends('layouts.app')

@section('title', 'Asesoria Management | Delete')

@section('content')
	<a href="/infraestructura/asesoria">Regresar</a>
	<form action = "/deleteAsesoria" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Asesoria"/>
               </td>
            </tr>
         </table>

      </form>

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
