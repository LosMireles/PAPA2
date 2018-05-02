@extends('layouts.app')

@section('title', 'Auditorio Management | Edit')

@section('content')
	<a href="/editarAuditorio">Regresar</a>
	<form action = "/editAuditorio/<?php echo $auditorios->IdAuditorio; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
     		<tr>
     			<td>Tipo</td>
     			<td><input type='text' name='Tipo' /></td>
     		</tr>
     		<tr>
     			<td>Cantidad Equipo</td>
     			<td><input type='text' name='CantidadEquipos' /></td>
     		</tr>
     		<tr>
     			<td>Cantidad AV</td>
     			<td><input type='text' name='Cantidad AV' /></td>
     		</tr>
     		<tr>
     			<td>Capacidad</td>
     			<td><input type='text' name='Capacidad' /></td>
     		</tr>
     		<tr>
     			<td>Cantidad Sanitarios</td>
     			<td><input type='text' name='CantidadSanitarios' /></td>
     		</tr>
     		<tr>
     			<td colspan = '2'>
     				<input type = 'submit' value = "Add Auditorio"/>
     			</td>
     		</tr>
     	</table>


      </form>
@endsection
