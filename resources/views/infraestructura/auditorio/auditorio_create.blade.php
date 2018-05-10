@extends('layouts.app')

@section('title', 'Auditorio Management | Add')

@section('content')
	<a href="/infraestructura/auditorio">Regresar</a>
	<form action = "/CrearAuditorio" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<table>
		<tr>
               		<td><div class="tooltip">Nombre<span class="tooltiptext">
				Nombre del auditorio
			</span></div></td>
               		<td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
            	</tr>
		<tr>
			<td><div class="tooltip">Cantidad de equipo<span class="tooltiptext">
				Cantidad de equipo de computo disponible en el auditorio
			</span></div></td>
			<td><input type='text' name='CantidadEquipo' /></td>
		</tr>
		<tr>
			<td><div class="tooltip">Cantidad de equipo audiovisual<span class="tooltiptext">
				Cantidad de equipo audiovisual disponible en el auditorio (proyectores, televisores, etc.)
			</span></div></td>
			<td><input type='text' name='CantidadAV' /></td>
		</tr>
		<tr>
			<td><div class="tooltip">Capacidad<span class="tooltiptext">
				Capacidad máxima de personas que soporta el auditorio.
			</span></div></td>
			<td><input type='text' name='Capacidad' /></td>
		</tr>
		<tr>
			<td><div class="tooltip">Cantidad de sanitarios<span class="tooltiptext">
				Cantidad de sanitarios disponibles en el auditorio
			</span></div></td>
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
