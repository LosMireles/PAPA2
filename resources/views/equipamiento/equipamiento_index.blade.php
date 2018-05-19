@extends('layouts.menus')

@section('title')
	equipamiento
@endsection

@section('descipcion')
	<a href="/" class="btn btn-primary" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Equipamiento</h1>
@endsection

@section('cabeza_tabla')
	<tr>
		<th class="text-center">Gestionar</th>
	</tr>
@endsection


@section('cuerpo_tabla')
	<tr>
		<td>
            <a href="{{action('SoftwareController@index')}}" data-toggle="tooltip" title="Software con el que cuenta la licenciatura.">
                Software [?]
            </a> </li>
		</td>
	</tr>
	<tr>
		<td>
            <a href="{{action('EquipoController@index')}}" data-toggle="tooltip" title="Equipos de cómputo con los que cuenta la licenciatura">
                Equipos [?]
            </a> </li>
		</td>
	</tr>
@endsection
