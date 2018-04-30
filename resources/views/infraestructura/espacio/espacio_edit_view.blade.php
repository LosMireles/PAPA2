@extends('layouts.app')

@section('title', 'View Espacio')

@section('content')
	<a href="/infraestructura/espacio">Regresar</a>
	<table border = 1>
         <tr>
            <td>Tipo</td>
            <td>Superficie</td>
            <td>Cantidad</td>
            <td>Clase</td>
         </tr>
         @foreach ($espacios as $espacio)
         <tr>
            <td>{{ $espacio->tipo }}</td>
			<td>{{ $espacio->superficie }}</td>
			<td>{{ $espacio->cantidad }}</td>
			<td>{{ $espacio->clase }}</td>
			<td><a href = 'editEspacio/{{ $espacio->tipo  }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
@endsection
