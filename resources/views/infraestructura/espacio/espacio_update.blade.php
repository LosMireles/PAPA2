@extends('layouts.app')

@section('title', 'Espacio Management | Edit')

@section('content')
	<a href="/editarEspacio">Regresar</a>
	<form action = "/editEspacio/<?php echo $espacios->tipo; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Tipo</td>
               <td>
                  <input type = 'text' name = 'tipo'
                     value = '<?php echo$espacios->tipo; ?>'/>
               </td>
               <td>Superficie</td>
               <td>
                  <input type = 'text' name = 'superficie'
                     value = '<?php echo$espacios->superficie; ?>'/>
               </td>
               <td>Cantidad</td>
               <td>
                  <input type = 'text' name = 'cantidad'
                     value = '<?php echo$espacios->cantidad; ?>'/>
               </td>
               <td>Clase</td>
               <td>
                  <input type = 'text' name = 'clase'
                     value = '<?php echo$espacios->clase; ?>'/>
               </td>

            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Espacio" />
               </td>
            </tr>
         </table>

      </form>
@endsection
