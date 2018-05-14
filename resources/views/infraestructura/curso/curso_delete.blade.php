@extends('layouts.app')

@section('title', 'Curso Management | Delete')

@section('content')
	<a href="/infraestructura/curso">Regresar</a>
	<form action = "/deleteCurso" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>nombre</td>
               <td><input type='text' name='nombre' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Delete Curso"/>
               </td>
            </tr>
         </table>

      </form>

      <table border = 1>
         <tr>
			 <td><div class="tooltip">Nombre<span class="tooltiptext">Nombre del Curso</span></div></td>
 			<td>Periodo</td>
            <td>Grupo</td>
            <td>Numero de Estudiantes</td>
            <td>Tipo de Aula</td>
			<td><div class="tooltip">Tipo<span class="tooltiptext">Identificador del curso</span></div></td>
         </tr>
         @foreach ($cursos as $curso)
         <tr>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->periodo }}</td>
            <td>{{ $curso->grupo }}</td>
						<td>{{ $curso->noEstudiantes }}</td>
						<td>{{ $curso->tipoAula }}</td>
						<td>{{ $curso->tipo }}</td>
         </tr>
         @endforeach
      </table>
@endsection
