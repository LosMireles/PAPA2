@extends('layouts.app')

@section('title')
	@yield('title')
@endsection

@section('content')
	@yield('descipcion')
	<div class="row">
		<div>
			<table class="table table-hover">
				<thead style="background-color: black; color: white;">
					@yield('cabeza_tabla')
				</thead>
				<tbody>
					@yield('cuerpo_tabla')
				</tbody>
			</table>
		</div>
	</div>
@endsection