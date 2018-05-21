@extends('layouts.app')

@section('title')
	Curriculo
@endsection

@section('content')
	<a href="{{ url('/tecnicos_academicos') }}" class="btn btn-primary">Regresar</a>
	<h1 class="text-center">Currículo de {{$tecnico->nombre}}</h1>
	
	<div class="text-center">
		<h1>{{$tecnico->curriculum}}</h1>
		<h1>
			<?php 
				echo getcwd();
			?>
		</h1>
		<embed src="http://curriculos/Enviando_1_515.pdf" width="600" height="200" alt="pdf" />

	</div>
@endsection