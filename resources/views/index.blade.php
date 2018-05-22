@extends('layouts.menus')

@section('title')
	inicio
@endsection

@section('descipcion')
	<h1 class="text-center">PROTOTIPO PAPA</h1>
	<h3>¿Descripción?</h3>
@endsection

<!-- ************************************************************************************** -->

@section('descripcion_doc')
	<h3>Sección de evidencias (cambiar por un nombre más apropiado)</h3>
	<h5>En esta sección se hace una visualización de la información recabada y se organiza de una forma similar a como que maneja el documento de CONAIC.</h5>
@endsection

@section('cabeza_tabla_doc')
	<tr>
		<th class="text-center">Áreas</th>
		<th class="text-center">Incisos</th>
	</tr>
@endsection

@section('cuerpo_tabla_doc')
	<tr>
		<td>
			<a href="#">9.1 Infraestructura</a>
		</td>

		<td>
			<ul class="list-unstyled">
				<li><a href="{{ action('Inciso9_1_3Controller@index') }}">9.1.3</a></li>
				<li><a href="{{ action('Inciso9_1_4Controller@index') }}">9.1.4</a></li>
				<li><a href="{{ action('Inciso9_1_6Controller@index') }}">9.1.6</a></li>
				<li><a href="{{ action('Inciso9_1_7Controller@index') }}">9.1.7</a></li>
				<li><a href="{{ action('Inciso9_1_8Controller@index') }}">9.1.8</a></li>
				<li><a href="{{ action('Inciso9_1_9Controller@index') }}">9.1.9</a></li>
				<li><a href="{{ action('Inciso9_1_10Controller@index') }}">9.1.10</a></li>
				<li><a href="{{ action('Inciso9_1_11Controller@index') }}">9.1.11</a></li>
				<li><a href="{{ action('Inciso9_1_13Controller@index') }}">9.1.13</a></li>
			</ul>
		</td>
	</tr>

	<tr>
		<td>
			<a href="#">9.2 Equipamiento</a>
		</td>

		<td>
			<ul class="list-unstyled">
				<li><a href="{{ action('Inciso9_2_1Controller@index') }}">9.2.1</a></li>
				<li><a href="{{ action('Inciso9_2_2Controller@index') }}">9.2.2</a></li>
				<li><a href="{{ action('Inciso9_2_7Controller@index') }}">9.2.7</a></li>
				<li><a href="{{ action('Inciso9_2_11Controller@index') }}">9.2.11</a></li>
				<li><a href="{{ action('Inciso9_2_12Controller@index') }}">9.2.12</a></li>
				<li><a href="{{ action('Inciso9_2_14Controller@index') }}">9.2.14</a></li>
			</ul>
		</td>
	</tr>
	<tr></tr>
@endsection

<!-- ************************************************************************************** -->

@section('descripcion_inventario')
	<h3>Sección de inventario</h3>
	<h5>En esta sección se recopila la información de la que dispone la licenciatura en diversas áreas de interés para CONAIC.</h5>
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
	<tr>
		<td>
			<a href="{{ url('/asignaturas') }}">Asignaturas</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="{{ url('/tecnicos_academicos') }}">Técnico académico</a>
		</td>
	</tr>
@endsection
