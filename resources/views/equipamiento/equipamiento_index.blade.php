@extends('layouts.menus')

@section('title')
	equipamiento
@endsection

@section('descipcion')
	<a href="/">Regresar</a>
	<h1 class="text-center">Equipamiento</h1>
@endsection

@section('cabeza_tabla') 
	<tr>
		<th class="text-center">Gestión de ...</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
			<a href="{{ url('/equipamiento/software') }}">Software</a> </li>			
		</td>
	</tr>
	<tr>
		<td>		
			<a href="{{ url('/equipamiento/equipos') }}">Equipos</a> </li>
		</td>
	</tr>
@endsection
