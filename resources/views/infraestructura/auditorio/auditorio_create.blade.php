@extends('layouts.app')

@section('title', 'Auditorio Management | Add')

@section('content')
	<a href="/infraestructura/auditorio">Regresar</a>
	<form action = "/CrearAuditorio" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<table>
		<tr>
               		<td>Tipo</td>
               		<td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
            	</tr>
		<tr>
			<td>Cantidad Equipo</td>
			<td><input type='text' name='CantidadEquipo' /></td>
		</tr>
		<tr>
			<td>Cantidad AV</td>
			<td><input type='text' name='CantidadAV' /></td>
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
