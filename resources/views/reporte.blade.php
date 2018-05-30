@extends('layouts.inciso_general')

@section('title')
	Reporte final
@endsection

@section('contenido_formulario')
	<!-- ************************** INICIO 9.1.4 ************************* -->
	<h3 class="text-justify">Inciso 9.1.4: Los responsables del centro de cómputo
  	deben ser personal con experiencia y perfil relacionado con el área</h3>

  	@foreach($preguntas_9_1_4 as $pregunta_9_1_4)
		<div class="form-group">
			<label for="{{$pregunta_9_1_4->id}}" class="control-label">
			    {{$pregunta_9_1_4->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta_9_1_4->id}}" name="{{$pregunta_9_1_4->id}}" disabled>{{$pregunta_9_1_4->respuesta}}</textarea>
			</div>
		</div>
	@endforeach
	<!-- ************************** FINAL 9.1.4 ************************** -->
	

	<!-- ************************** INICIO 9.1.12 ************************* -->
	<h3 class="text-justify">Inciso 9.1.12: En los espacios mencionados en el inciso 9.1.11, se debe
    tener un lugar comodo por cada diez estudiantes inscritos en el programa,
    ofreciendo las condiciones adecuadas de higiene y seguridad. </h3>
	<div class="form-group">
		<label for="{{$preguntas_9_1_12[0]->id}}" class="control-label"> {{$preguntas_9_1_12[0]->titulo}} </label>

		<div>
		  <textarea class="form-control" id="{{$preguntas_9_1_12[0]->id}}" name="{{$preguntas_9_1_12[0]->id}}" disabled>{{$preguntas_9_1_12[0]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
    <label for="{{$preguntas_9_1_12[1]->id}}" class="control-label"> {{$preguntas_9_1_12[1]->titulo}} </label>

      <div>
        @if($preguntas_9_1_12[1]->respuesta == 'Si')
          <input type="radio" name="{{$preguntas_9_1_12[1]->id}}" value="Si" checked disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_12[1]->id}}" value="No" disabled> No
        @elseif($preguntas_9_1_12[1]->respuesta == 'No')
          <input type="radio" name="{{$preguntas_9_1_12[1]->id}}" value="Si" disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_12[1]->id}}" value="No" checked disabled> No
        @else
          <input type="radio" name="{{$preguntas_9_1_12[1]->id}}" value="Si" checked disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_12[1]->id}}" value="No" disabled> No
        @endif
      </div>
    </div>
	
	<div class="form-group">
    <label for="{{$preguntas_9_1_12[2]->id}}" class="control-label"> {{$preguntas_9_1_12[2]->titulo}} </label>

	<div>
        @if($preguntas_9_1_12[2]->respuesta == 'Si')
          <input type="radio" name="{{$preguntas_9_1_12[2]->id}}" value="Si" checked disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_12[2]->id}}" value="No" disabled> No
        @elseif($preguntas_9_1_12[2]->respuesta == 'No')
          <input type="radio" name="{{$preguntas_9_1_12[2]->id}}" value="Si" disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_12[2]->id}}" value="No" checked disabled> No
        @else
          <input type="radio" name="{{$preguntas_9_1_12[2]->id}}" value="Si" checked disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_12[2]->id}}" value="No" disabled> No
        @endif
      </div>
    </div>
	<!-- ************************** FINAL 9.1.12 ************************** -->

	<!-- ************************** INICIO 9.2.1 ************************** -->
	<h3 class="text-justify">Inciso 9.2.1: Para cada asignatura mencionar el software
   	que se utiliza y si está disponible dentro de la institución</h3>

   	@foreach($preguntas_9_2_1 as $pregunta_9_2_1)
	    @component('layouts.textarea_input')
            @slot("nombre_input", $pregunta_9_2_1->id)
            @slot("label_input", $pregunta_9_2_1->titulo)
            @slot("valor_default", $pregunta_9_2_1->respuesta)
            @slot('extra')
            	disabled
            @endslot
        @endcomponent
	@endforeach

	@component('layouts.componentes.tabla_incisos')

        <h4>Tabla cursos y los software que utilizan</h4>
        @slot('cabeza_tabla')
            <th>Curso</th>
            <th>Periodo</th>
            <th>Licenciatura</th>
			<th>Grupo</th>
            <th>Numero estudiantes</th>
            <th>Softwares</th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->periodo}}</td>
                <td>{{$curso->departamento}}</td>
                <td>{{$curso->no_grupo}}</td>
                <td>{{$curso->no_estudiantes}}</td>
                <td>
                    @if(!empty($cursos_softwares))
                        @foreach($curso->softwares as $software)
                            {{$software->nombre}} <br>
                        @endforeach
                    @endif
                </td>
            </tr>
            @endforeach
        @endslot
    @endcomponent
	<!-- ************************** FINAL 9.2.1 *************************** -->


	<!-- ************************** INICIO 9.2.12 ************************* -->
	<h3 class="text-justify">Inciso 9.2.12: Los Servicios de Cómputo deben contar
   	con el soporte técnico adecuado</h3>

   	<div class="form-group">
		<label for="{{$preguntas_9_2_12[0]->id}}" class="control-label"> {{$preguntas_9_2_12[0]->titulo}} </label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_12[0]->id}}" name="{{$preguntas_9_2_12[0]->id}}" disabled>{{$preguntas_9_2_12[0]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas_9_2_12[1]->id}}" class="control-label"> {{$preguntas_9_2_12[1]->titulo}} </label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_12[1]->id}}" name="{{$preguntas_9_2_12[1]->id}}" disabled="">{{$preguntas_9_2_12[1]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas_9_2_12[2]->id}}" class="control-label"> {{$preguntas_9_2_12[2]->titulo}} </label>

		<div>
            @if($preguntas_9_2_12[2]->respuesta == 'Si')
	          <input type="radio" name="{{$preguntas_9_2_12[2]->id}}" value="Si" checked disabled> Sí <br>
	          <input type="radio" name="{{$preguntas_9_2_12[2]->id}}" value="No" disabled> No
	        @elseif($preguntas_9_2_12[2]->respuesta == 'No')
	          <input type="radio" name="{{$preguntas_9_2_12[2]->id}}" value="Si" disabled> Sí <br>
	          <input type="radio" name="{{$preguntas_9_2_12[2]->id}}" value="No" checked disabled> No
	        @else
	          <input type="radio" name="{{$preguntas_9_2_12[2]->id}}" value="Si" checked disabled> Sí <br>
	          <input type="radio" name="{{$preguntas_9_2_12[2]->id}}" value="No" disabled> No
	        @endif
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas_9_2_12[3]->id}}" class="control-label"> {{$preguntas_9_2_12[3]->titulo}} </label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_12[3]->id}}" name="{{$preguntas_9_2_12[3]->id}}" disabled>{{$preguntas_9_2_12[3]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas_9_2_12[4]->id}}" class="control-label"> {{$preguntas_9_2_12[4]->titulo}} </label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_12[4]->id}}" name="{{$preguntas_9_2_12[4]->id}}" disabled>{{$preguntas_9_2_12[4]->respuesta}}</textarea>
		</div>
	</div>
	<!-- ************************** FINAL 9.2.12 ************************** -->
	

@endsection