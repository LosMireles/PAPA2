@extends('layouts.app')

@section('title', 'View Cubiculo')

@section('content')
      <a href="/infraestructura/aula">Regresar</a>
	<table border = 1>
         <tr>
            <td>IdAula</td>
            <td>Tipo</td>
            <td>CantidadAV</td>
            <td>Cantidad equipo</td>
            <td>Capacidad </td>
			<td>SillasPaleta </td>
			<td> MesasTrabajo </td>
			<td> Isotopica </td>
			<td> Estrado </td>
			<td> Pizarron </td>
			<td> Illuminacion </td>
			<td> AislamientoR </td>
			<td> Ventilacion </td>
			<td> Temperatura </td>
			<td> Espacio </td>
			<td> Mobilario </td>
			<td>Conexiones </td>
         </tr>
         @foreach ($aulas as $aula)
         <tr>
            <td>{{ $aula->IdAula }}</td>
            <td>{{ $aula->Tipo }}</td>
			<td>{{ $aula->CantidadAV }}</td>
			<td>{{ $aula->CantidadEquipo }}</td>
			<td>{{ $aula->Capacidad }}</td>
			<td>{{ $aula->SillasPaleta }}</td>
			<td>{{ $aula->MesasTrabajo }}</td>
			<td>{{ $aula->Isotopica }}</td>
			<td>{{ $aula->Estrado }}</td>
			<td>{{ $aula->Pizarron }}</td>
			<td>{{ $aula->Illuminacion }}</td>
			<td>{{ $aula->AislamientoR }}</td>
			<td>{{ $aula->Ventilacion }}</td>
			<td>{{ $aula->Temperatura }}</td>
			<td>{{ $aula->Espacio }}</td>
			<td>{{ $aula->Mobilario }}</td>
			<td>{{ $aula->Conexiones }}</td>
			<td><a href = 'editAula/{{ $aula->IdAula  }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
@endsection
