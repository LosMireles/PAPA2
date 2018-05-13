@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('content')
	@yield('descripcion')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form @yield('accion') method="POST">
				<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

				<table>
					@yield('contenido_tabla')
					<tr>
						<td>
							<input type = 'submit' value = "Agregar"/>
						</td>
					</tr>	
				</table>
			</form>
		</div>
	</div>
@endsection