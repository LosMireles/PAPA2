
@extends('layouts.app')

@section('title', 'View Curso')

@section('content')
	<a href="/infraestructura/curso">Regresar</a>
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
			<td><a href = 'delete/{{ $curso->nombre  }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
@endsection
