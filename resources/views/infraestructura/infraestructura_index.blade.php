@extends('layouts.app')

@section('title', 'equipamiento')

@section('content')
	<a href="{{ url()->previous() }}">Regresar</a>
	<h1>Infraestructura</h1>
	<ul>
		<li> 	
			<a href="#">Inmobiliario</a> 
			<ul>
				<li> <a href="#">Aula</a> </li>
				<li> <a href="#">Cubículo</a> </li>
				<li> <a href="#">Asesoría</a> </li>
				<li> <a href="#">Baños</a> </li>
				<li> <a href="#">Auditorios</a> </li>
			</ul>
		</li>
		<li> <a href="#">Cursos</a> </li>
	</ul>
@endsection

