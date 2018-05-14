@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('estilo_personalizado')
	<style type="text/css">
		.tabla_general > thead {
			background-color: #ed2a2a;
			color: white;
		}
	</style>
@endsection

@section('content')
	@yield('descipcion')

	@yield('descripcion_doc')
	<div class="row">
		<table class="table table table-hover tabla_general">
			<thead>
				@yield('cabeza_tabla_doc')
			</thead>
			<tbody>
				@yield('cuerpo_tabla_doc')
			</tbody>
		</table>
	</div>

	@yield('descripcion_inventario')
	<div class="row">
		<div>
			<table class="table table-hover tabla_general">
				<thead>
					@yield('cabeza_tabla')
				</thead>
				<tbody>
					@yield('cuerpo_tabla')
				</tbody>
			</table>
		</div>
	</div>
@endsection