@extends('layouts.app')

@section('title', 'Software Management | Add')

@section('content')
	<a href="/equipamiento/software">Regresar</a>
	<form action = "/CrearSoftware" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>nombre</td>
               <td><input type='text' name='nombre' /></td>
            </tr>
            <tr>
                <td><label for="manual">Se cuenta con manual: </label> </td>
                <td><input type="radio" name="manualUsuario" value="1" checked="">Sí <br>
                <input type="radio" name="manualUsuario" value="0"> No <br><br></td>
            </tr>
            <tr>
               <td>licencia</td>
               <td><input type='text' name='licencia' /></td>
            </tr>
            <tr>
               <td>disponibilidad</td>
               <td><input type='text' name='disponibilidad' /></td>
            </tr>
            <tr>
               <td>clase</td>
               <td><input type='text' name='clase' /></td>
            </tr>
            <tr>
               <td>serial</td>
               <td><input type='text' name='serial' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Software"/>
               </td>
            </tr>
         </table>

      </form>
@endsection