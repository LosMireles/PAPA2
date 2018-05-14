@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('content')
	@yield('descripcion')
	<table class="table table-hover">
		<thead>
			@yield('cabeza_tabla')
		</thead>
		<tbody>
			@yield('cuerpo_tabla')
		</tbody>
	</table>
@endsection