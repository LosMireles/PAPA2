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
				<li><a href="#">9.1.1</a></li>
				<li><a href="#">9.1.2</a></li>
				<li><a href="#">9.1.3</a></li>
				<li><a href="#">9.1.4</a></li>
			</ul>
		</td>
	</tr>

	<tr>
		<td>
			<a href="#">9.2 Equipamiento</a>			
		</td>

		<td>
			<ul class="list-unstyled">
				<li><a href="#">9.2.1</a></li>
				<li><a href="#">9.2.2</a></li>
				<li><a href="#">9.2.3</a></li>
				<li><a href="#">9.2.4</a></li>
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
			<a href="#">Asignaturas</a>
		</td>
	</tr>
@endsection

