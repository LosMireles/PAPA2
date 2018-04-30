@extends('layouts.app')

@section('title', 'Cubiculo Management | Edit')

@section('content')
	<a href="/editarAula">Regresar</a>
	<form action = "/editAula/<?php echo $aulas->IdAula; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td><input type='text' name='Tipo' 
               value = '<?php echo$aulas->Tipo; ?>'/></td>
            </tr>

		<tr>
               <td>Capacidad</td>
               <td><input type='text' name='Capacidad' 
               value = '<?php echo$aulas->Capacidad; ?>'/></td>
        </tr>
	    <tr>
               <td>CantidadAV</td>
               <td><input type='text' name='CantidadAV' 
               value = '<?php echo$aulas->CantidadAV; ?>'/></td>
        </tr>
	    <tr>
               <td>CantidadEquipo</td>
               <td><input type='text' name='CantidadEquipo' 
               value = '<?php echo$aulas->CantidadEquipo; ?>'/></td>
        </tr>
  
		<tr>
               <td>Pizarron</td>
               <td><input type='text' name='Pizarron' 
               value = '<?php echo$aulas->Pizarron; ?>'/></td>
        </tr>
		<tr>
               <td>Illuminacion</td>
               <td><input type='text' name='Illuminacion' 
               value = '<?php echo$aulas->Illuminacion; ?>'/></td>
        </tr>	
		<tr>
               <td>AislamientoR</td>
               <td><input type='text' name='AislamientoR' 
               value = '<?php echo$aulas->AislamientoR; ?>'/></td>
        </tr>
		<tr>
               <td>Ventilacion</td>
               <td><input type='text' name='Ventilacion' 
               value = '<?php echo$aulas->Ventilacion; ?>'/></td>
        </tr>
		<tr>
               <td>Temperatura</td>
               <td><input type='text' name='Temperatura' 
               value = '<?php echo$aulas->Temperatura; ?>'/></td>
        </tr>
		<tr>
               <td>Espacio</td>
               <td><input type='text' name='Espacio' 
               value = '<?php echo$aulas->Espacio; ?>'/></td>
        </tr>
		<tr>
               <td>Mobilario</td>
               <td><input type='text' name='Mobilario' 
               value = '<?php echo$aulas->Mobilario; ?>'/></td>
        </tr>
		<tr>
               <td>Conexiones</td>
               <td><input type='text' name='Conexiones' 
               value = '<?php echo$aulas->Conexiones; ?>'/></td>
        </tr>
				<input type="checkbox" <?php 
				if($aulas->SillasPaleta == '1') 
				{
					echo 'checked';
				} 
				?>
				name="SillasPaleta" value="1"/> SillasPaleta <br>

               <input type="checkbox" <?php 
				if($aulas->MesasTrabajo == '1') 
				{
					echo 'checked';
				} 
				?>
               
               name="MesasTrabajo" value="1" /> MesasTrabajo <br>

               <input type="checkbox" <?php 
				if($aulas->Isotopica == '1') 
				{
					echo 'checked';
				} 
				?>
               
               name="Isotopica" value="1" />Isotopica <br>

               <input type="checkbox" 
               checked = "0" name="Estrado" <?php 
				if($aulas->Estrado == '1') 
				{
					echo 'checked';
				} 
				?>
               value="1" />Estrado <br>
            <tr>
			
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Aula"/>
               </td>
            </tr>
         </table>
			
      </form>
@endsection

	


