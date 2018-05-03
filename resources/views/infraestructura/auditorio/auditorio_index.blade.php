@extends('layouts.app')

@section('title', 'Auditorio')

@section('content')
	<a href="/infraestructura/">Regresar</a>
	<h1>Auditorio</h1>
	<ul>
		<li> <a href="/insertarAuditorios">Insertar</a> </li>
		<li> <a href="/editarAuditorio">Editar</a> </li>
		<li> <a href="/verAuditorio">Ver</a> </li>
		<li> <a href="/borrarAuditorio">Borrar</a> </li>
	</ul>
@endsection
