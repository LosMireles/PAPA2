@extends('layouts.app')

@section('title', 'Cubiculo Management | Edit')

@section('content')
	<a href="/editarSanitario">Regresar</a>
	<form action = "/editSanitario/<?php echo $sanitarios->IdSanitario; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo'
               value = '<?php echo $sanitarios->Tipo; ?>'/></td>
            </tr>

						<tr>
               <td>InicioHora</td>
               <td><input type='text' name='InicioHora'
               value = '<?php echo $sanitarios->InicioHora; ?>'/></td>
        		</tr>
    				<tr>
               <td>FinHora</td>
               <td><input type='text' name='FinHora'
               value = '<?php echo $sanitarios->FinHora; ?>'/></td>
        		</tr>
	    			<tr>
               <td>InicioDia</td>
               <td><input type='text' name='InicioDia'
               value = '<?php echo$sanitarios->InicioDia; ?>'/></td>
        		</tr>

						<tr>
               <td>FinDia</td>
               <td><input type='text' name='FinDia'
               value = '<?php echo$sanitarios->FinDia; ?>'/></td>
        		</tr>
						<tr>
               <td>Limpieza</td>
               <td><input type='text' name='Limpieza'
               value = '<?php echo$sanitarios->Limpieza; ?>'/></td>
        		</tr>
						<tr>
               <td>CantidadPersonal</td>
               <td><input type='text' name='CantidadPersonal'
               value = '<?php echo$sanitarios->CantidadPersonal; ?>'/></td>
        		</tr>
						<tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Sanitario" />
               </td>
            </tr>
         </table>

      </form>
@endsection
