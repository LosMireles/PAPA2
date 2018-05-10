@extends('layouts.app')

@section('title', 'Espacio Management | Edit')

@section('content')
	<a href="/editarEspacio">Regresar</a>
	<form action = "/editEspacio/<?php echo $espacios->tipo; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td><div class="tooltip">Nombre espacio<span class="tooltiptext">Un identificador unico (por ejemplo A202)</span></div></td>
               <td>
                  <input type = 'text' name = 'tipo'
                     value = '<?php echo$espacios->tipo; ?>'/>
               </td>
               <td><div class="tooltip">Superficie<span class="tooltiptext">Metros cuadrados de superficie que abarca el espacio</span></div></td>
               <td>
                  <input type = 'text' name = 'superficie'
                     value = '<?php echo$espacios->superficie; ?>'/>
               </td>
               <td><div class="tooltip">Cantidad<span class="tooltiptext">Cantidad de espacios con las con el mismo nombre y caracteristicas</span></div></td>
               <td>
                  <input type = 'text' name = 'cantidad'
                     value = '<?php echo$espacios->cantidad; ?>'/>
               </td>
               <td><div class="tooltip">Clase<span class="tooltiptext">Uno de los 5 posibles espacios fisicos (Aula, Cubiculo, Sanitarios, Asesorias, Auditorio)</span></div></td>

               <td><select name="clase">
					<option value="Aula" <?php if($espacios->clase == 'Aula'){echo("selected");}?>>Aula</option>
					<option  value="Cubiculo" <?php if($espacios->clase == 'Cubiculo'){echo("selected");}?>  >Cubiculo</option>
				  	</select>
				</td>

            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Espacio" />
               </td>
            </tr>
         </table>

      </form>
@endsection
