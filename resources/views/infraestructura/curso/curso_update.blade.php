@extends('layouts.app')

@section('title', 'Curso Management | Edit')

@section('content')
	<a href="/editCurso">Regresar</a>
	<form action = "/editCurso/<?php echo $cursos->nombre; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>nombre</td>
               <td>
                  <input type = 'text' name = 'nombre'
                     value = '<?php echo$cursos->nombre; ?>'/>
               </td>
            </tr>
            <tr>
               <td>periodo</td>
               <td>
                  <input type = 'text' name = 'periodo'
                     value = '<?php echo$cursos->periodo; ?>'/>
               </td>
            </tr>
            <tr>
               <td>grupo</td>
               <td>
                  <input type = 'text' name = 'grupo'
                     value = '<?php echo$cursos->grupo; ?>'/>
               </td>
            </tr>
            <tr>
               <td>noEstudiantes</td>
               <td>
                  <input type = 'text' name = 'noEstudiantes'
                     value = '<?php echo$cursos->noEstudiantes; ?>'/>
               </td>
            </tr>
            <tr>
               <td>tipoAula</td>
               <td>
                  <input type = 'text' name = 'tipoAula'
                     value = '<?php echo$cursos->tipoAula; ?>'/>
               </td>
            </tr>
						<tr>
               <td>tipo</td>
               <td>
                  <input type = 'text' name = 'tipo'
                     value = '<?php echo$cursos->tipo; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Curso"/>
               </td>
            </tr>
         </table>

      </form>
@endsection
