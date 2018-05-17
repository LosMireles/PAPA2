@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('estilo_personalizado')
	<style type="text/css">
		table tr td {
			padding: : 15px;
		}
	</style>
	@yield('javascripts')
@endsection

@section('content')
	@yield('descripcion')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form-horizontal" @yield('accion') method="POST">
				<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				@yield('contenido_formulario')

				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<button type='submit' class="btn btn-primary">Agregar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
