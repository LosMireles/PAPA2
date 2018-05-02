@extends('layouts.app')

@section('title', 'View Cubiculo')

@section('content')
      <a href="/infraestructura/sanitario">Regresar</a>
	<table border = 1>
         <tr>
           <td>IdSanitario</td>
           <td>Tipo</td>
           <td>InicioHora</td>
           <td>FinHora</td>
           <td>InicioDia </td>
           <td>FinDia </td>
           <td> Limpieza </td>
           <td> CantidadPersonal </td>
         </tr>
         @foreach ($sanitarios as $sanitario)
         <tr>
           <td>{{ $sanitario->IdSanitario }}</td>
           <td>{{ $sanitario->Tipo }}</td>
           <td>{{ $sanitario->InicioHora }}</td>
           <td>{{ $sanitario->FinHora }}</td>
           <td>{{ $sanitario->InicioDia }}</td>
           <td>{{ $sanitario->FinDia }}</td>
           <td>{{ $sanitario->Limpieza }}</td>
           <td>{{ $sanitario->CantidadPersonal }}</td>
			<td><a href = 'editSanitario/{{ $sanitario->IdSanitario  }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
@endsection
