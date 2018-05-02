@extends('layouts.app')

@section('title', 'Aula Management | Add')

@section('content')
	<a href="/infraestructura/sanitario">Regresar</a>
	<form action = "/CrearSanitario" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
	    	<tr>
               <td>InicioHora</td>
               <td><input type='text' name='InicioHora' /></td>
        </tr>
	    	<tr>
               <td>FinHora</td>
               <td><input type='text' name='FinHora' /></td>
        </tr>

				<tr>
               <td>InicioDia</td>
               <td><input type='text' name='InicioDia' /></td>
        </tr>
				<tr>
               <td>FinDia</td>
               <td><input type='text' name='FinDia' /></td>
        </tr>
				<tr>
               <td>Limpieza</td>
               <td><input type='text' name='Limpieza' /></td>
        </tr>
				<tr>
               <td>CantidadPersonal</td>
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
