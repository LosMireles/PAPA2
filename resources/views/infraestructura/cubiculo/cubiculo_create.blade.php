@extends('layouts.app')

@section('title', 'Cubiculo Management | Add')

@section('content')
	<a href="/infraestructura/cubiculo">Regresar</a>
	<form action = "/CrearCubiculo" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td><div class="tooltip">Tipo
		  <span class="tooltiptext">Es culpa de conaic el nombre feo</span>
		</div>
		</td>
               <td><input type='text' name='Tipo' value = '<?php $tipo = $_GET['tipo']; if (!empty($tipo))echo $tipo;?>'/></td>
            </tr>
	    <tr>
               <td><div class="tooltip">Profesor
		  <span class="tooltiptext">El men/mena que ahi esta</span>
		</div></td>
               <td><input type='text' name='Profesor' /></td>
            </tr>
	    <tr>
               <td><div class="tooltip">Cantidad de equipo.
		  <span class="tooltiptext">Cuantas computadoras hay</span>
		</div></td>
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
