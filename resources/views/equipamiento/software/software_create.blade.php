@extends('layouts.app')

@section('title', 'Software Management | Add')

@section('content')
<a href="/equipamiento/software">Regresar</a>

<h1>Formulario para agregar un software</h1>

<form action = "/CrearSoftware" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <table>
    <tr>
        <td>
            <div class="tooltip">
                <label for="nombre"> Nombre: <\label>
                <span class="tooltiptext">Nombre del software</span>
           </div>
        </td>
        <td>
            <input type='text' name='nombre' />
        </td>
    </tr>

    <tr>
        <td>
            <div class="tooltip">
                <label for="nombre"> Se cuenta con manual: <\label>
                <span class="tooltiptext">Si se cuenta con un manual de uso del software o no</span>
            </div>
        </td>
        <td>
            <input type="radio" name="manualUsuario" value="1" checked="">Sí <br>
            <input type="radio" name="manualUsuario" value="0"> No <br><br>
        </td>
    </tr>

    <tr>
        <td>
            <div class="tooltip">
                <label for="nombre"> Licencia: <\label>
                <span class="tooltiptext">Si se cuenta con un manual de uso del software o no</span>
                <span class="tooltiptext">
                    Tipo de licencia que se tiene del software (por ejemplo, libre)
                </span>
            </div>
        </td>
        <td><input type='text' name='licencia' /></td>
    </tr>

    <tr>
        <td>
            <div class="tooltip">
                <label for="nombre"> Lugar de obtencion: <\label>
                <span class="tooltiptext">Se refiere a donde se consiguio el software</span>
            </div>
        </td>
       <td><input type='text' name='disponibilidad' /></td>
    </tr>

    <tr>
        <td>
            <div class="tooltip">
                <label for="nombre"> Clase: <\label>
                <span class="tooltiptext">
                    Se refiere a que clase de la licenciatura hace uso del software
                </span>
            </div>
        </td>
       <td><input type='text' name='clase' /></td>
    </tr>

    <tr>
        <td>
            <div class="tooltip">
                <label for="nombre"> Equipos: <\label>
                <span class="tooltiptext">
                    Equipos que tienen instalado el software
                </span>
            </div>
        </td>
        <td>
            @foreach($equipos as $equipo)
                <input type="checkbox" name="equipo[]" value="{{$equipo->serial}}">
                {{$equipo->serial}}<br>
            @endforeach
        </td>
    </tr>

    <tr>
        <td colspan = '2'>
            <input type = 'submit' value = "Add Software"/>
        </td>
    </tr>
    </table>

</form>

@endsection

