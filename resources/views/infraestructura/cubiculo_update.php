<html>
   
   <head>
      <title>Student Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $cubiculos[0]->IdCubiculo; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Tipo</td>
               <td>
                  <input type = 'text' name = 'Tipo' 
                     value = '<?php echo$cubiculos[0]->Tipo; ?>'/>
               </td>
               <td>Profesor</td>
               <td>
                  <input type = 'text' name = 'Profesor' 
                     value = '<?php echo$cubiculos[0]->Profesor; ?>'/>
               </td>
               <td>Cantidad Equipo</td>
               <td>
                  <input type = 'text' name = 'CantidadEquipo' 
                     value = '<?php echo$cubiculos[0]->CantidadEquipo; ?>'/>
               </td>

            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Cubiculo" />
               </td>
            </tr>
         </table>

      </form>
   
   </body>
</html>