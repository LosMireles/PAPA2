
@extends('layouts.app')

@section('title', 'View Software')

@section('content')
	<a href="/equipamiento/software">Regresar</a>
    <table border = 1>
        <tr>

            <td><div class="tooltip">Nombre<span class="tooltiptext">Nombre del software</span></div></td>
            <td><div class="tooltip">Se cuenta con manual<span class="tooltiptext">Si se cuenta con un manual de uso del software o no</span></div></td>
            <td><div class="tooltip">Licencia<span class="tooltiptext">Tipo de licencia que se tiene del software (por ejemplo, libre)</span></div></td>
            <td><div class="tooltip">Lugar de obtencion<span class="tooltiptext">Se refiere a donde se consigui el software</span></div></td>
            <td><div class="tooltip">Clase<span class="tooltiptext">Si es un lenguaje, una libreria o una herramienta CASE</span></div></td>
            <td><div class="tooltip">Equipos<span class="tooltiptext">Equipos que tienen instalado el software</span></div></td>

        </tr>
        @foreach ($softwares as $software)
        <tr>
            <td>{{ $software->nombre }}</td>
            <td>{{ $software->manualUsuario }}</td>
            <td>{{ $software->licencia }}</td>
			<td>{{ $software->disponibilidad }}</td>
			<td>{{ $software->clase }}</td>

            <td>
                @if(!empty($software->equipos))
                    @foreach($software->equipos as $equipo)
                        {{$equipo->serial}} <br>
                    @endforeach
                @endif
            </td>

        </tr>
        @endforeach
    </table>
@endsection

