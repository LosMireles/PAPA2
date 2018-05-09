@extends('layouts.app')

@section('title', 'Cubiculo Management | Edit')

@section('content')
	<a href="/editarCubiculo">Regresar</a>
	<form action = "/editCubiculo/<?php echo $cubiculos->IdCubiculo; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td><div class="tooltip">Codigo del cubiculo<span class="tooltiptext">Numero del cubiculo</span></div></td>
               <td>
                  <input type = 'text' name = 'Tipo' 
                     value = '<?php echo$cubiculos->Tipo; ?>'/>
               </td>
               <td><div class="tooltip">Profesor<span class="tooltiptext">El encargado del cubiculo</span></div></td>
               <td>
                  <input type = 'text' name = 'Profesor' 
                     value = '<?php echo$cubiculos->Profesor; ?>'/>
               </td>
               <td><div class="tooltip">Cantidad de equipo.<span class="tooltiptext">Cantidad de computadoras hay en el cubiculo</span></div></td>
               <td>
                  <input type = 'text' name = 'CantidadEquipo' 
                     value = '<?php echo$cubiculos->CantidadEquipo; ?>'/>
               </td>

            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Editar Cubiculo" />
               </td>
            </tr>
         </table>

      </form>
@endsection
