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
			<form method = "PATCH" @yield('accion') class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
				<input type = "hidden" name = "_method" value = "PATCH">
				<div class="form-group">
                    <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                    @yield('contenido_formulario')
                </div>

				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<button type='submit' class="btn btn-primary">Editar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

