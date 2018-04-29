@extends('layouts.app')

@section('title', 'Cubiculo Management | Edit')

@section('content')
	<a href="/editarCubiculo">Regresar</a>
	<form action = "/edit/<?php echo $cubiculos->IdCubiculo; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td>
                  <input type = 'text' name = 'Tipo' 
                     value = '<?php echo$cubiculos->Tipo; ?>'/>
               </td>
               <td>Profesor</td>
               <td>
                  <input type = 'text' name = 'Profesor' 
                     value = '<?php echo$cubiculos->Profesor; ?>'/>
               </td>
               <td>Cantidad Equipo</td>
               <td>
                  <input type = 'text' name = 'CantidadEquipo' 
                     value = '<?php echo$cubiculos->CantidadEquipo; ?>'/>
               </td>

            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Cubiculo" />
               </td>
            </tr>
         </table>

      </form>
@endsection
