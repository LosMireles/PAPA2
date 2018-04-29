
@extends('layouts.app')

@section('title', 'View Software')

@section('content')
	<a href="/equipamiento/software">Regresar</a>
	<table border = 1>
         <tr>
            <td>nombre</td>
            <td>manual usuario</td>
            <td>licencia</td>
            <td>disponibilidad</td>
            <td>clase</td>
            <td>serial</td>
         </tr>
         @foreach ($softwares as $software)
         <tr>
            <td>{{ $software->nombre }}</td>
            <td>{{ $software->manualUsuario }}</td>
            <td>{{ $software->licencia }}</td>
			<td>{{ $software->disponibilidad }}</td>
			<td>{{ $software->clase }}</td>
			<td>{{ $software->serial }}</td>
			<td><a href = 'delete/{{ $software->nombre  }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
@endsection
