@extends('layouts.menus')

@section('title')
	infraestructura
@endsection

@section('descipcion')
	<a href="/">Regresar</a>
	<h1 class="text-center">Infraestructura</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Gestión de ...</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="/infraestructura/espacio">Espacio</a>
			<ul>
				<li> <a href="/infraestructura/aula">Aula</a> </li>
				<li> <a href="/infraestructura/cubiculo">Cubículo</a> </li>
				<li> <a href="/infraestructura/asesoria">Asesoría</a> </li>
				<li> <a href="/infraestructura/sanitario">Sanitario</a> </li>
				<li> <a href="/infraestructura/auditorio">Auditorios</a> </li>
			</ul>
		</td>
	</tr>

	<!--<tr>
		<td><a href="/infraestructura/curso">Cursos</a></td>
	</tr>-->
@endsection
