
@extends('layouts.app')

@section('title', 'View Cursos')

@section('content')
	<a href="/infraestructura/curso">Regresar</a>
	<table border = 1>
         <tr>
            <td>nombre</td>
            <td>periodo</td>
            <td>grupo</td>
            <td>noEstudiantes</td>
            <td>tipoAula</td>
            <td>tipos</td>
         </tr>
         @foreach ($cursos as $curso)
         <tr>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->periodo }}</td>
            <td>{{ $curso->grupo }}</td>
						<td>{{ $curso->noEstudiantes }}</td>
						<td>{{ $curso->tipoAula }}</td>
						<td>{{ $curso->tipos }}</td>
         </tr>
         @endforeach
      </table>
@endsection
