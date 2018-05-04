
@extends('layouts.app')

@section('title', 'View Curso')

@section('content')
	<a href="/infraestructura/curso">Regresar</a>
	<table border = 1>
         <tr>
            <td>nombre</td>
            <td>periodo</td>
            <td>grupo</td>
            <td>no. Estudiantes</td>
            <td>tipo Aula</td>
            <td>tipo</td>
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
