@extends('layouts.app')

@section('title', 'Aula Management | Add')

@section('content')
	<a href="/infraestructura/aula">Regresar</a>
	<form action = "/CrearAula" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>

		<tr>
               <td>Capacidad</td>
               <td><input type='text' name='Capacidad' /></td>
        </tr>
	    <tr>
               <td>CantidadAV</td>
               <td><input type='text' name='CantidadAV' /></td>
        </tr>
	    <tr>
               <td>CantidadEquipo</td>
               <td><input type='text' name='CantidadEquipo' /></td>
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
               <td>AislamientoR</td>
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
				<input type="checkbox" name="SillasPaleta" value="1"/> SillasPaleta <br>

               <input type="checkbox" name="MesasTrabajo" value="1" /> MesasTrabajo <br>

 
               <input type="checkbox" name="Isotopica" value="1" />Isotopica <br>

               <input type="checkbox" name="Estrado" value="1" />Estrado <br>
            <tr>
			
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Aula"/>
               </td>
            </tr>
         </table>
			
      </form>
@endsection
