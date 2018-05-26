@extends("layouts.app")

@section('title', 'Inicio')

@section('estilo_personalizado')
	<style>
		.nav-tabs{
		   	border-color:#1A3E5E;
		  	width:100%;
		}

		.nav-tabs > li a { 
			border: 1px solid #1A3E5E;
			background-color:#2F71AB; 
			color:#fff;
		}

		.nav-tabs > li.active > a,
		.nav-tabs > li.active > a:focus,
		.nav-tabs > li.active > a:hover{
			background-color:#D6E6F3;
			color: #000;
			border: 1px solid #1A3E5E;
			border-bottom-color: transparent;
		}

		.nav-tabs > li > a:hover{
		  	background-color: #D6E6F3 !important;
			border-radius: 5px;
			color: #000;
			border: 1px solid #1A3E5E;
			border-bottom-color: transparent;
		} 

		.tab-pane {
			border:solid 1px #1A3E5E;
			border-top: 0; 
			width: 100%;
			background-color:#D6E6F3;
			padding:5px;
		}
	</style>
@endsection

@section('content')
<div class="container">
	<br>
	<h2>Prototipo PAPA</h2>
	<h3>Categoría <a href="#" data-toggle="tooltip" title="Categoría número 9 considerada en el documento de CONAIC. Este prototipo trabaja con dicha categoría.">considerada</a>: Infraestructura</h3>
	<br>
</div>

<div name="tabla_principal">
	<ul class="nav nav-tabs" role="tablist">
	  	<li class="active">
	  		<a href="#1" role="tab" data-toggle="tab">Criterios de evaluación: captura y modificación de información</a>
	  	</li>
	  	<li>
	  		<a href="#2" role="tab" data-toggle="tab">Generación de informe</a>
	  	</li>
	  	<li>
	  		<a href="#3" role="tab" data-toggle="tab">Ayuda</a>
	  	</li>  
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  	<div class="tab-pane active" id="1">
	  		@component('layouts.componentes_inicio.formulario_entrada')
	  		@endcomponent
	  	</div>
	  	<div class="tab-pane" id="2">
	  		
	  		<div class="row text-right">
	  			<a href="#" class="btn btn-danger" style="margin: 15px;">Generar informe</a>
	  		</div>
	  		
	  		@component('layouts.componentes_inicio.formulario_salida')
	  		@endcomponent
	  	</div>
	  	<div class="tab-pane" id="3">
	  		<h3>Resumen</h3>
	  		<h4>El siguiente prototipo trabaja sobre la categoría número 9 del documento de CONAIC, esto es, infraestructura.</h4> <h4>Los incisos incluidos son aquellos que hacen referencia a:</h4>
	  		<ul>
	  			<li>Aulas y laboratorios (9.x.x, ...)</li>
	  			<li>Cubículos (9.x.x, ...)</li>
	  			<li>Espacios de asesorías (9.x.x, ...)</li>
	  			<li>Sanitarios (9.x.x, ...)</li>
	  			<li>Auditorios (9.x.x, ...)</li>
	  			<li>Software (9.x.x, ...)</li>
	  			<li>Equipo (9.x.x, ...)</li>
	  			<li>Técnicos académicos (9.x.x, ...)</li>
	  			<li>Cursos (9.x.x, ...)</li>
	  		</ul>
	  	</div>  
	</div>
	<br>
</div>

@endsection
