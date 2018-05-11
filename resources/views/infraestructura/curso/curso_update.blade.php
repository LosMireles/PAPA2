@extends('layouts.app')

@section('title', 'Curso Management | Edit')

@section('content')
	<a href="/editCurso">Regresar</a>
	<form action = "/editCurso/<?php echo $cursos->nombre; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
	            <tr>
					<td><div class="tooltip">Nombre<span class="tooltiptext">Nombre del Curso</span></div></td>
	               	<td><input type='text' name='nombre' /></td>
	            </tr>
				<tr>
	               <td>Periodo</td>
	               <td><input type='text' name='periodo' /></td>
	            </tr>
							<tr>
	               <td>Grupo</td>
	               <td><input type='text' name='grupo' /></td>
	            </tr>
							<tr>
	               <td>Numero de Estudiantes</td>
	               <td><input type='text' name='noEstudiantes' /></td>
	            </tr>
							<tr>
	               <td>Tipo de Aula</td>
	               <td><input type='text' name='tipoAula' /></td>
	            </tr>
				<tr>
					<td><div class="tooltip">Tipo<span class="tooltiptext">Identificador del curso</span></div></td>
	               	<td><input type='text' name='tipo' /></td>
	            </tr>

	            <tr>
	               <td colspan = '2'>
	                  <input type = 'submit' value = "Add Curso"/>
	               </td>
	            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Curso"/>
               </td>
            </tr>
         </table>

      </form>
@endsection
