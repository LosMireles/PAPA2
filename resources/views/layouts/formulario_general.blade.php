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
    <a href="{{url()->previous()}}" class="btn btn-primary">
        Regresar
    </a>

	<h1 class="text-center">
	    Formulario para @yield("objeto_informacion")
	</h1>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			@yield('metodo_envio_formulario')
				<input type = "hidden" name = "_token" value = "{{csrf_token()}}">
				@yield('contenido_formulario')

                <input type="hidden" name='url_previous' value="{{$url_previous or "/"}}">
                </input>


				<div class="form-group">
				    @yield('boton_submit_formulario')
				</div>
			</form>
		</div>
	</div>
@endsection

