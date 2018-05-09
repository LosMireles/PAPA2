@extends('layouts.app')

@section('title', 'Cubiculo Management | Add')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<form action = "/CrearCubiculo" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td><div class="tooltip">Codigo del cubiculo<span class="tooltiptext">Numero del cubiculo</span></div></td>
               <td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
            </tr>
	    <tr>
               <td><div class="tooltip">Profesor<span class="tooltiptext">El encargado del cubiculo</span></div></td>
               <td><input type='text' name='Profesor' /></td>
            </tr>
	    <tr>
               <td><div class="tooltip">Cantidad de equipo.<span class="tooltiptext">Cantidad de computadoras hay en el cubiculo</span></div></td>
               <td><input type='text' name='CantidadEquipo' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Insertar Cubiculo"/>
               </td>
            </tr>
         </table>
			
      </form>
@endsection
