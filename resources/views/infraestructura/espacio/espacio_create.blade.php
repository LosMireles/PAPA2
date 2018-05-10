@extends('layouts.app')

@section('title', 'Espacio Management | Add')

@section('content')
	<a href="/infraestructura/espacio">Regresar</a>
	<form action = "/CrearEspacio" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td><div class="tooltip">Nombre espacio<span class="tooltiptext">Un identificador unico (por ejemplo A202)</span></div></td>
               <td><input type='text' name='tipo' /></td>
            </tr>
            <tr>
               <td><div class="tooltip">Superficie<span class="tooltiptext">Metros cuadrados de superficie que abarca el espacio</span></div></td>
               <td><input type='text' name='superficie' /></td>
            </tr>
            <tr>
               <td><div class="tooltip">Cantidad<span class="tooltiptext">Cantidad de espacios con las con el mismo nombre y caracteristicas</span></div></td>
               <td><input type='text' name='cantidad' /></td>
            </tr>
            <tr>
               <td><div class="tooltip">Clase<span class="tooltiptext">Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)</span></div></td>
               <td><select name="clase">
		    <option value="Aula">Aula</option>
		    <option value="Cubiculo">Cubiculo</option>
		    <option value="Sanitario">Sanitario</option>
		    <option value="Asesoria">Asesoria</option>
		    <option value="Auditorio">Auditorio</option>

		  </select></td>
            </tr>

            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Espacio"/>
               </td>
            </tr>
         </table>

      </form>
@endsection
