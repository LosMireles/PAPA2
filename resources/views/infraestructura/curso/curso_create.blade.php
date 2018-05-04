@extends('layouts.app')

@section('title', 'Curso Management | Add')

@section('content')
	<a href="/infraestructura/curso">Regresar</a>
	<form action = "/CrearCurso" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>nombre</td>
               <td><input type='text' name='nombre' /></td>
            </tr>
						<tr>
               <td>periodo</td>
               <td><input type='text' name='periodo' /></td>
            </tr>
						<tr>
               <td>grupo</td>
               <td><input type='text' name='grupo' /></td>
            </tr>
						<tr>
               <td>noEstudiantes</td>
               <td><input type='text' name='noEstudiantes' /></td>
            </tr>
						<tr>
               <td>tipoAula</td>
               <td><input type='text' name='tipoAula' /></td>
            </tr>
						<tr>
               <td>tipo</td>
               <td><input type='text' name='tipo' /></td>
            </tr>
            
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Curso"/>
               </td>
            </tr>
         </table>

      </form>
@endsection
