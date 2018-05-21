@extends('layouts.inciso')

@section('contenido_formulario')
	<div class="form-group">
		<label for="serial" class="col-sm-4 control-label" data-toggle="tooltip" title="Ingrese el serial del equipo">Serial: </label>

		<div class="col-sm-8">
			<input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" required>
		</div>
	</div>
@endsection