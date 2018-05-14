@extends('layouts.app')

@section('title', 'Asesoria Management | Add')

@section('content')
	<a href="/infraestructura/asesoria">Regresar</a>
	<form action = "/CrearAsesoria" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<table>
		<tr>
			<td><div class="tooltip">Tipo<span class="tooltiptext">Identificador de la asesoria</span></div></td>
        	<td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
    	</tr>
		<tr>
			<td>Hora de inicio</td>
			<td><input type='text' name='InicioHora' /></td>
		</tr>
		<tr>
			<td>Hora de finalizacion</td>
			<td><input type='text' name='FinHora' /></td>
		</tr>
		<tr>
			<td>Dia de inicio</td>
			<td><input type='text' name='InicioDia' /></td>
		</tr>
		<tr>
			<td>Dia de finalizacion</td>
			<td><input type='text' name='FinDia' /></td>
		</tr>
		<tr>
			<td><div class="tooltip">Materia<span class="tooltiptext">Clave de Materia o nombre de la misma</span></div></td>
			<td><input type='text' name='Materia' /></td>
		</tr>
		<tr>
			<td colspan = '2'>
				<input type = 'submit' value = "Add Asesoria"/>
			</td>
		</tr>
	</table>

      </form>
@endsection
