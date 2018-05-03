@extends('layouts.app')

@section('title', 'infraestructura')

@section('content')
	<a href="/">Regresar</a>
	<h1>Infraestructura</h1>
	<ul>
		<li>
			<a href="/infraestructura/espacio">Espacio</a>
			<ul>
				<li> <a href="/infraestructura/aula">Aula</a> </li>
				<li> <a href="/infraestructura/cubiculo">Cubículo</a> </li>
				<li> <a href="/infraestructura/asesoria">Asesoría</a> </li>
				<li> <a href="/infraestructura/sanitario">Sanitario</a> </li>
				<li> <a href="/infraestructura/auditorio">Auditorios</a> </li>
			</ul>
		</li>
		<li> <a href="#">Cursos</a> </li>
	</ul>
@endsection
