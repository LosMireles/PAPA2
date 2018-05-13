@extends('layouts.app')

@section('title', 'Software Management | Edit')

@section('content')
	<a href="/editarSoftware">Regresar</a>
	<form action = "/editSoftware/<?php echo $softwares->nombre; ?>" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <table>
            <tr>
                <td>
                    <div class="tooltip">
                        <label for="nombre">Nombre:</label>
                        <span class="tooltiptext">Nombre del software</span>
                    </div>
                    <td>
                        <input type = 'text' name = 'nombre' value = "{{$softwares->nombre}}">
                    </td>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="tooltip">
                        <label for="manualUsuario">Se cuenta con manual:</label>
                        <span class="tooltiptext">Si se cuenta con un manual de uso del software o no</span>
                    </div>
                </td>
                @if($softwares->manualUsuario == 1)
                    <td><input type="radio" name="manualUsuario" value="1" checked>Sí
                    <input type="radio" name="manualUsuario" value="0" >No </td>
                @else
                    <td><input type="radio" name="manualUsuario" value="1"> Sí
                    <input type="radio" name="manualUsuario" value="0" checked>No</td>
                @endif
            </tr>

            <tr>
                <td>
                    <div class="tooltip">
                        <label for="licencia">Licencia:</label>
                        <span class="tooltiptext">
                            Tipo de licencia que se tiene del software (por ejemplo, libre)
                        </span>
                    </div>
                </td>
                <td>
                  <input type = 'text' name = 'licencia' value = "{{$softwares->licencia}}">
               </td>
            </tr>

            <tr>
                <td>
                    <div class="tooltip">
                        <label for="disponibilidad">Lugar de obtención:</label>
                        <span class="tooltiptext">
                        Se refiere a donde se consiguio el software
                        </span>
                    </div>
                </td>
                <td>
                    <input type = 'text' name = 'disponibilidad' value "{{$softwares->disponibilidad}}">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="tooltip">
                        <label for="clase">Clase:</label>
                        <span class="tooltiptext">
                        Si es un lenguaje, una libreria o una herramienta CASE
                        </span>
                    </div>
                </td>
                <td>
                    <input type = 'text' name = 'clase' value = "{{$softwares->clase}}">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="tooltip">
                        <label for="equipos">Equipos:</label>
                        <span class="tooltiptext">
                            Se refiere a que equipos tienen instalados el
                            software
                        </span>
                    </div>
                </td>
                <td>
                    @if(!empty($software->equipos))
                        @foreach($software->equipo as $equipo)
                            <input type = 'text' name = 'equipos'
                            values = "{{$equipo->serial}}"> <br>
                        @endforeach
                    @endif
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Software"/>
               </td>
            </tr>
         </table>

      </form>
@endsection
