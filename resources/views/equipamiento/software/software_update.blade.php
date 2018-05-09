@extends('layouts.app')

@section('title', 'Software Management | Edit')

@section('content')
	<a href="/editSoftware">Regresar</a>
	<form action = "/editSoftware/<?php echo $softwares->nombre; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>nombre</td>
               <td>
                  <input type = 'text' name = 'nombre'
                     value = '<?php echo$softwares->nombre; ?>'/>
               </td>
            </tr>
            <tr>
                <td><label for="manual">Se cuenta con manual: </label> </td>
                @if($softwares->manualUsuario == 1)
                    <td><input type="radio" name="manualUsuario" value="1" checked>Sí
                    <input type="radio" name="manualUsuario" value="0" >No </td>
                @else
                    <td><input type="radio" name="manualUsuario" value="1"> Sí
                    <input type="radio" name="manualUsuario" value="0" checked>No</td>
                @endif
            </tr>
            <tr>
               <td>licencia</td>
               <td>
                  <input type = 'text' name = 'licencia'
                     value = '<?php echo$softwares->licencia; ?>'/>
               </td>
            </tr>
            <tr>
               <td>disponibilidad</td>
               <td>
                  <input type = 'text' name = 'disponibilidad'
                     value = '<?php echo$softwares->disponibilidad; ?>'/>
               </td>
            </tr>
            <tr>
               <td>clase</td>
               <td>
                  <input type = 'text' name = 'clase'
                     value = '<?php echo$softwares->clase; ?>'/>
               </td>
            </tr>
            <tr>
               <td>serial</td>
               <td>
                  <input type = 'text' name = 'serial'
                     value = '<?php echo$softwares->serial; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Software"/>
               </td>
            </tr>
         </table>

      </form>
@endsection