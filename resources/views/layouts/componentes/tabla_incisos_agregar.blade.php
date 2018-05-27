<div class="row text-right" style="margin: 2px;">
		{{ $controlador_agregar }}
        {{ Form::hidden('_method', 'GET') }}
        {{ Form::submit('Agregar', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
</div>

<table class="table table-hover">
	<thead style="background-color: #1b70f9; color: white;">
		{{$cabeza_tabla}}
		<th></th> <!-- Espacio para el boton de editar -->
		<th></th> <!-- Espacio para el boton eliminar -->
	</thead>
	<tbody>
		{{$cuerpo_tabla}}
	</tbody>
</table>