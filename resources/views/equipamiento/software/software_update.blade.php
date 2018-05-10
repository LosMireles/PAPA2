@extends('layouts.app')

@section('title', 'Software Management | Edit')

@section('content')
	<a href="/editSoftware">Regresar</a>
	<form action = "/editSoftware/<?php echo $softwares->nombre; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>
                  <td><div class="tooltip">Nombre<span class="tooltiptext">Nombre del software</span></div></td>
                  <input type = 'text' name = 'nombre'
                     value = '<?php echo$softwares->nombre; ?>'/>
               </td>
            </tr>
            <tr>

               <td><div class="tooltip">Se cuenta con manual<span class="tooltiptext">Si se cuenta con un manual de uso del software o no</span></div></td>
                @if($softwares->manualUsuario == 1)
                    <td><input type="radio" name="manualUsuario" value="1" checked>Sí
                    <input type="radio" name="manualUsuario" value="0" >No </td>
                @else
                    <td><input type="radio" name="manualUsuario" value="1"> Sí
                    <input type="radio" name="manualUsuario" value="0" checked>No</td>
                @endif
            </tr>
            <tr>
           <td><div class="tooltip">Licencia<span class="tooltiptext">Tipo de licencia que se tiene del software (por ejemplo, libre)</span></div></td>
               <td>
                  <input type = 'text' name = 'licencia'
                     value = '<?php echo$softwares->licencia; ?>'/>
               </td>
            </tr>
            <tr>
               <td><div class="tooltip">Lugar de obtencion<span class="tooltiptext">Se refiere a donde se consigui el software</span></div></td>
               <td>
                  <input type = 'text' name = 'disponibilidad'
                     value = '<?php echo$softwares->disponibilidad; ?>'/>
               </td>
            </tr>
            <tr>
               <td><div class="tooltip">Clase<span class="tooltiptext">Se refiere a que clase de la licenciatura hace uso del software</span></div></td>
               <td>
                  <input type = 'text' name = 'clase'
                     value = '<?php echo$softwares->clase; ?>'/>
               </td>
            </tr>
            <tr>
               <td><div class="tooltip">Serial<span class="tooltiptext">Serial de computadora que use el software</span></div></td>
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
