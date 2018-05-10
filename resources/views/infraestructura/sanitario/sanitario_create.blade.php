@extends('layouts.app')

@section('title', 'Sanitario Management | Add')

@section('content')
	<a href="/infraestructura/sanitario">Regresar</a>
	<form action = "/CrearSanitario" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
                <td><div class="tooltip">Tipo<span class="tooltiptext">
			Nombre clave para el sanitario donde se indica el tipo de sanitario (hombres o mujeres), piso en el que se
			se encuentra, para que personas esta disponible (persona, alumnado).
		 </span></div></td>
               <td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
            </tr>
	    	<tr>
               <td><div class="tooltip">Hora de inicio<span class="tooltiptext">
			Hora de inicio al que esta disponible el sanitario en el día.
		 </span></div></td>
               <td><input type='text' name='InicioHora' /></td>
        </tr>
	    	<tr>
               <td><div class="tooltip">Hora de terminación<span class="tooltiptext">
			 Hora a la que el sanitario deja de estar disponible en el día.
		 </span></div></td>
               <td><input type='text' name='FinHora' /></td>
        </tr>

				<tr>
               <td><div class="tooltip">Día de inicio<span class="tooltiptext">
			 Primer día de la semana en que el sanitario esta disponible.
		 </span></div></td>
               <td><input type='text' name='InicioDia' /></td>
        </tr>
				<tr>
               <td><div class="tooltip">Día de terminación<span class="tooltiptext">
			 Último día de la semana en que el sanitario esta disponible.
		 </span></div></td>
               <td><input type='text' name='FinDia' /></td>
        </tr>
				<tr>
               <td><div class="tooltip">Limpieza<span class="tooltiptext">
			 Rango de 0 a 5 donde califique el nivel de limpieza del sanitario (siendo
			 5 el más alto).
		 </span></div></td>
               <td><input type='text' name='Limpieza' /></td>
        </tr>
				<tr>
               <td><div class="tooltip">Cantidad de personal<span class="tooltiptext">
			 Cantidad de personal dedicado a dar mantenimiento al sanitario.
		 </span></div></td>
               <td><input type='text' name='CantidadPersonal' /></td>
        </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Sanitario"/>
               </td>
            </tr>
         </table>

      </form>
@endsection
