@extends('layouts.app')

@section('title', 'View Espacio')

@section('content')
	<a href="/infraestructura/espacio">Regresar</a>
	<table border = 1>
         <tr>

           <td><div class="tooltip">Nombre espacio<span class="tooltiptext">Un identificador unico (por ejemplo A202)</span></div></td>
           <td><div class="tooltip">Superficie<span class="tooltiptext">Metros cuadrados de superficie que abarca el espacio</span></div></td>
           <td><div class="tooltip">Cantidad<span class="tooltiptext">Cantidad de espacios con las con el mismo nombre y caracteristicas</span></div></td>
           <td><div class="tooltip">Clase<span class="tooltiptext">Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)</span></div></td>

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
