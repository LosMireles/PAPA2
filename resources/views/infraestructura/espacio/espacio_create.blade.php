@extends('layouts.app')

@section('title', 'Espacio Management | Add')

@section('content')
	<a href="/infraestructura/espacio">Regresar</a>
	<form action = "/CrearEspacio" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='tipo' /></td>
            </tr>
            <tr>
               <td>Superficie</td>
               <td><input type='text' name='superficie' /></td>
            </tr>
            <tr>
               <td>cantidad</td>
               <td><input type='text' name='cantidad' /></td>
            </tr>
            <tr>
               <td>clase</td>
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
