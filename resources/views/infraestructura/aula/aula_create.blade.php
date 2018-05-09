@extends('layouts.app')

@section('title', 'Aula Management | Add')

@section('content')
	<a href="/infraestructura/aula">Regresar</a>
	<form action = "/CrearAula" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
		<td><div class="tooltip">Codigo del aula<span class="tooltiptext">Nombre escrito en las puertas</span></div></td>
               	<td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
            </tr>

		<tr>
            	<td><div class="tooltip">Capacidad.<span class="tooltiptext">Capacidad maxima del aula</span> </td>
               <td><input type='text' name='Capacidad' /></td>
        </tr>
	    <tr>
            	<td><div class="tooltip">Cantidad de equipo.<span class="tooltiptext">Cantidad de equipo audiovisual hay en el aula</span></td>
               <td><input type='text' name='CantidadAV' /></td>
        </tr>
	    <tr>
            	<td><div class="tooltip">Cantidad de computadoras.<span class="tooltiptext">Cantidad de computadoras hay en el aula</span></td>
               <td><input type='text' name='CantidadEquipo' /></td>
        </tr>
	<tr>
		<td> En una escala del 1 al 4, califique la calidad de: </td>
        </tr>
	<tr>
               <td>Pizarron</td>
               <td><input type='text' name='Pizarron' /></td>
        </tr>
		<tr>
               <td>Illuminacion</td>
               <td><input type='text' name='Illuminacion' /></td>
        </tr>	
		<tr>
               <td><div class="tooltip">Aislamiento.<span class="tooltiptext">De los ruidos</span></td>
               <td><input type='text' name='AislamientoR' /></td>
        </tr>
		<tr>
               <td>Ventilacion</td>
               <td><input type='text' name='Ventilacion' /></td>
        </tr>
		<tr>
               <td>Temperatura</td>
               <td><input type='text' name='Temperatura' /></td>
        </tr>
		<tr>
               <td>Espacio</td>
               <td><input type='text' name='Espacio' /></td>
        </tr>
		<tr>
               <td>Mobilario</td>
               <td><input type='text' name='Mobilario' /></td>
        </tr>
		<tr>
               <td>Conexiones</td>
               <td><input type='text' name='Conexiones' /></td>
        </tr>
	<tr>
		<td> Mencione si el aula tiene: </td>
	</tr>
	<tr>
		<td><input type="checkbox" name="SillasPaleta" value="1"/> Sillas de paleta</td>
	</tr>
	<tr>
               <td><input type="checkbox" name="MesasTrabajo" value="1" /> Mesas de trabajo </td>
	<tr>
 
              	<td><input type="checkbox" name="Isotopica" value="1" /><div class="tooltip">Isotopica.<span class="tooltiptext">Vision escalonada</span></td>
	</tr>
	<tr>
               <td><input type="checkbox" name="Estrado" value="1" /><div class="tooltip">Estrado.<span class="tooltiptext">Elevacion para el profesor</span> </td>
	</tr>
            <tr>
			
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Aula"/>
               </td>
            </tr>
         </table>
			
      </form>
@endsection
