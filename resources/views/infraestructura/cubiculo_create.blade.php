@extends('layouts.app')

@section('title', 'Cubiculo Management | Add')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<form action = "/CrearCubiculo" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' /></td>
            </tr>
	    <tr>
               <td>Profesor</td>
               <td><input type='text' name='Profesor' /></td>
            </tr>
	    <tr>
               <td>CantidadEquipo</td>
               <td><input type='text' name='CantidadEquipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Cubiculo"/>
               </td>
            </tr>
         </table>
			
      </form>
@endsection
