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
            <td>IdAsesoria</td>
			<td>Tipo</td>
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
