@extends('layouts.menus')

@section('title')
	inicio
@endsection

@section('descipcion')
	<h1>PROTOTIPO PAPA</h1>
	<h3>Descripción: Esta es la descripción para el proyecto de ingeniería</h3>
@endsection

@section('cabeza_tabla')
	<tr>
		<th class="text-center">Registro en la base de datos</th>
	</tr>
@endsection

@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="{{ url('/infraestructura') }}">9.1 Infraestructura</a>			
		</td>
	</tr>
	<tr>
		<td>		
			<a href="{{ url('/equipamiento') }}">9.2 Equipamiento</a>
		</td>
	</tr>
@endsection

