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

  <!-- ************************** INICIO 9.1.6 ************************* -->
  <h3 class="text-justify">Inciso 9.1.6: Las aulas deben ser funcionales, disponer
  de espacio suficiente para cada estudiante y tener las condiciones adecuadas de
  higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido
  y mobiliario</h3>

  @foreach($preguntas_9_1_6 as $pregunta_9_1_6)
    <div class="form-group">
      <label for="{{$pregunta_9_1_6->id}}" class="control-label">
          {{$pregunta_9_1_6->titulo}}
      </label>

      <div>
        <textarea class="form-control" id="{{$pregunta_9_1_6->id}}" name="{{$pregunta_9_1_6->id}}" disabled="">{{$pregunta_9_1_6->respuesta}}</textarea>
      </div>
    </div>
  @endforeach

  @component('layouts.componentes.tabla_incisos')
    @slot('cabeza_tabla')
        <th>Titulo</th>
        <th>Respuesta</th>
    @endslot

    @slot('cuerpo_tabla')
      @foreach ($aulas as $aula)
      <tr>

                <td>
                    Nombre: <br>
                    Superficie: <br>
                    Capacidad: <br>
                    Pizarron: <br>
                    Iluminacion: <br>
                    Aislamiento ruido: <br>
                    Ventilacion: <br>
                    Temperatura: <br>
                    Espacio: <br>
                    Mobilario: <br>
                    Conexiones: <br>
                    Sillas paleta: <br>
                    Mesas trabajo: <br>
                    Isotopica: <br>
                    Estrado:
                </td>

                <td>
                    {{ $aula->nombre}} <br>
                    {{ $aula->superficie }} <br>
                    {{ $aula->capacidad }} <br>
                    {{ $aula->pizarron}} <br>
                    {{ $aula->iluminacion}} <br>
                    {{ $aula->aislamiento_ruido}} <br>
                    {{ $aula->ventilacion}} <br>
                    {{ $aula->temperatura}} <br>
                    {{ $aula->espacio}} <br>
                    {{ $aula->mobilario}} <br>
                    {{ $aula->conexiones}} <br>

                    @if($aula->sillas_paleta)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->mesas_trabajo)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->isotopica)
                        Si
                    @else
                        No
                    @endif
                        hay <br>

                    @if($aula->estrado)
                        Si
                    @else
                        No
                    @endif
                        hay

                </td>
      </tr>
      @endforeach
    @endslot

    @slot('fotos')
        <style type='text/css'>
        .img_div {
          float: left;
          margin-right: 10px;
          margin-bottom: 15px;

        }
        img{
          width: auto;
          max-height: 100%
        }
        .line{
          border-bottom: 1px solid #111;
          display: block;
          margin-top: 60px;
          padding-top: 10px;
          position: relative;
        }
      </style>

      <?php
        $dirs = array_filter(glob('storage/infraestructura/aulas/*'), 'is_dir');
        $hayImagen = 0;
        foreach ($dirs as $path) {
          $dir = $path.'/';
          $imagenes= glob($dir . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
          if (sizeof($imagenes) != 0) {
            $hayImagen = 1;
            break;
          }
        }
      ?>
      @if($hayImagen == 1)
        <h3 align="center">
            Fotografías del inciso 9.1.6
        </h3>
        @foreach($dirs as $path)
          <?php
            $dirname = $path.'/';
            $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
            $aulaID = substr($path, strlen('storage/infraestructura/aulas/'));
            $aulaReg = App\Aula::where('id', $aulaID)->first();
            $aulaNombre = $aulaReg->nombre;
          ?>

          @if(sizeof($images) != 0)
            <h2 class="line"><?php echo $aulaNombre ?></h2>
          @endif

          @foreach ($images as $image)
          <figure>
            <div class="buttonimg">
              <div class="img_div">
                <img src="<?php echo asset($image)?>" height="220"
                      alt="<?php echo $image?>"/>
                <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
              </div>
            </div>
          </figura>

          @endforeach
          <br clear='all'/>
        @endforeach
      @else
        <h2 align="center">No hay imagenes</h2>
      @endif
      @endslot
  @endcomponent
  <!-- ************************** FINAL 9.1.6 ************************** -->


	<!-- ************************** INICIO 9.1.7 ************************* -->
	<h3 class="text-justify">Inciso 9.1.7: El número de aulas habrá de ser suficiente
   	para antender la impartición de cursos que se programen en cada periodo escolar</h3>

	@foreach($preguntas_9_1_7 as $pregunta_9_1_7)
		<div class="form-group">
			<label for="{{$pregunta_9_1_7->id}}" class="control-label">
			    {{$pregunta_9_1_7->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta_9_1_7->id}}" name="{{$pregunta_9_1_7->id}}" disabled>{{$pregunta_9_1_7->respuesta}}</textarea>
			</div>
		</div>
	@endforeach

	@component('layouts.componentes.tabla_incisos')
		<!-- Tabla de todos los grupos -->
		@slot('cabeza_tabla')
			<th>Nombre</th>
			<th>Período</th>
			<th>Grupo</th>
			<th>Numero de Estudiantes</th>
			<th>Pertenencia</th>
			<th>Espacios</th>
		@endslot

		@slot('cuerpo_tabla')
		  @foreach ($cursos as $curso)
			<tr>
			  	<td>{{ $curso->nombre }}</td>
			  	<td>{{ $curso->periodo }}</td>
			  	<td>{{ $curso->no_grupo }}</td>
			  	<td>{{ $curso->no_estudiantes }}</td>
			  	<td>{{ $curso->departamento }}</td>

                <td>
                    @if(!empty($curso->aulas))
                        @foreach($curso->aulas as $aula)
                            {{$aula->nombre}} <!--Solo para uno, cambiar foreach en caso de mas-->
                        @endforeach
                    @endif
                </td>
			</tr>
		  @endforeach
		@endslot
	  @endcomponent
	<!-- ************************** FINAL 9.1.7 ************************** -->

	<!-- ************************** INICIO 9.1.8 ************************** -->
	<h3 class="text-justify">Inciso 9.1.8: El programa debe disponer de al menos una
  	aula con equipo de cómputo y audiovisual permanentemente instalado que podrá ser
 	utilizada para cursos normales y especializados</h3>

 	@foreach($preguntas_9_1_8 as $pregunta_9_1_8)
		<div class="form-group">
			<label for="{{$pregunta_9_1_8->id}}" class="control-label">
			    {{$pregunta_9_1_8->titulo}}
			</label>

			<div>
				<input type="text" class="form-control" id="{{$pregunta_9_1_8->id}}" name="{{$pregunta_9_1_8->id}}" value="{{$pregunta_9_1_8->respuesta}}" required disabled>
			</div>
		</div>
	@endforeach

	@component('layouts.componentes.tabla_incisos')

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Aula</th>
            <th>Serial Equipo computo</th>
            <th>Serial equipo audiovisual</th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($aulas as $aula)
            <tr>
                <td>{{$aula->nombre}}</td>

                @if(!empty($aula->equipos))
                    <td>
                    @foreach($aula->equipos as $equipo)
                        @if($equipo->tipo == "Computo")
                            {{$equipo->serial}}
                            <br>
                        @endif
                    @endforeach
                    </td>

                    <td>
                    @foreach($aula->equipos as $equipo)
                        @if($equipo->tipo == "Audiovisual")
                            {{$equipo->serial}}
                            <br>
                        @endif
                    @endforeach
                    </td>
                @endif
            </tr>
            @endforeach
        @endslot

      @slot('fotos')
        <style type='text/css'>
        .img_div {
          float: left;
          margin-right: 10px;
          margin-bottom: 15px;

        }
        img{
          width: auto;
          max-height: 100%
        }
        .line{
          border-bottom: 1px solid #111;
          display: block;
          margin-top: 60px;
          padding-top: 10px;
          position: relative;
        }
      </style>

      <?php
        $dirs = array_filter(glob('storage/infraestructura/aulas/*'), 'is_dir');
        $hayImagen = 0;
        foreach ($dirs as $path) {
          $dir = $path.'/';
          $imagenes= glob($dir . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
          if (sizeof($imagenes) != 0) {
            $hayImagen = 1;
            break;
          }
        }
      ?>
      @if($hayImagen == 1)
        <h3 align="center">
            Fotografías del inciso 9.1.8
        </h3>
        @foreach($dirs as $path)
          <?php
            $dirname = $path.'/';
            $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
            $aulaID = substr($path, strlen('storage/infraestructura/aulas/'));
            $aulaReg = App\Aula::where('id', $aulaID)->first();
            $aulaNombre = $aulaReg->nombre;
          ?>

          @if(sizeof($images) != 0)
            <h2 class="line"><?php echo $aulaNombre ?></h2>
          @endif

          @foreach ($images as $image)
          <figure>
            <div class="buttonimg">
              <div class="img_div">
                <img src="<?php echo asset($image)?>" height="220"
                      alt="<?php echo $image?>"/>
                <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
              </div>
            </div>
          </figura>

          @endforeach
          <br clear='all'/>
        @endforeach
      @else
        <h2 align="center">No hay imagenes</h2>
      @endif
      @endslot

    @endcomponent

    <!-- PONER LO DE LAS FOTOS -->

	<!-- ************************** FINAL 9.1.8 *************************** -->

  <!-- ************************** INICIO 9.1.9 ************************* -->
  <h3 class="text-justify">Inciso 9.1.9: Los profesores de tiempo completo, tres cuartos
  y medio tiempo deben contar con cubículos. El resto de los profesores deben contar
  con lugares adecuados para su trabajo</h3>

  @foreach($preguntas_9_1_9 as $pregunta_9_1_9)
      @component('layouts.textarea_input')
            @slot("nombre_input", $pregunta_9_1_9->id)
            @slot("label_input", $pregunta_9_1_9->titulo)
            @slot("valor_default", $pregunta_9_1_9->respuesta)
            @slot('extra', 'disabled')
        @endcomponent
  @endforeach

  @component('layouts.componentes.tabla_incisos')
      @slot('cabeza_tabla')
            <th>Identificador cubiculo</th>
            <th>Profesor</th>
        @endslot

      @slot('cuerpo_tabla')
        @foreach($cubiculos as $cubiculo)
          <tr>
              <td>{{$cubiculo->nombre}}</td>
                <td>{{$cubiculo->profesor}}</td>
          </tr>
        @endforeach
      @endslot

      @slot('fotos')
        <style type='text/css'>
          .img_div {
            float: left;
            margin-right: 10px;
            margin-bottom: 15px;

          }
          img{
            width: auto;
            max-height: 100%
          }
          .line{
            border-bottom: 1px solid #111;
            display: block;
            margin-top: 60px;
            padding-top: 10px;
            position: relative;
          }
        </style>

          <?php
            $dirs = array_filter(glob('storage/infraestructura/cubiculosMini/*'), 'is_dir');
            $hayImagen = 0;
            foreach ($dirs as $path) {
              $dir = $path.'/';
              $imagenes= glob($dir . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
              if (sizeof($imagenes) != 0) {
                $hayImagen = 1;
                break;
              }
            }
          ?>
          @if($hayImagen == 1)
            <h3 align="center">
                Fotografías del inciso 9.1.9
            </h3>
            @foreach($dirs as $path)
              <?php
                $dirname = $path.'/';
                $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
                $cubiculoID = substr($path, strlen('storage/infraestructura/cubiculosMini/'));
                $cubiculoReg = App\Cubiculo::where('id', $cubiculoID)->first();
                $cubiculoNombre = $cubiculoReg->nombre;
              ?>
              @if(sizeof($images) != 0)
                <h2 class="line"><?php echo $cubiculoNombre ?></h2>
              @endif

              @foreach ($images as $image)
                <figure>
                  <div class="buttonimg">
                    <div class="img_div">
                      <img src="<?php echo asset($image)?>" height="220"
                            alt="<?php echo $image?>"/>
                      <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
                    </div>
                  </div>
                </figura>

              @endforeach
              <br clear='all'/>
            @endforeach
          @else
            <h2 align="center">No hay imagenes</h2>
          @endif
      @endslot
    @endcomponent
  <!-- ************************** FINAL 9.1.9 ************************** -->

  <!-- ************************** INICIO 9.1.10 ************************* -->
  <h3 class="text-justify">Inciso 9.1.10: Debe existir espacios para asesorías a estudiantes</h3>

  <!-- Pregunta 1 -->
    <div class="form-group">
        <label for="{{$preguntas_9_1_10[0]->id}}" class="control-label">{{$preguntas_9_1_10[0]->titulo}}</label>

        <div>
          @if($preguntas_9_1_10[0]->respuesta == 'Si')
            <input type="radio" id="{{$preguntas_9_1_10[0]->id}}" name="{{$preguntas_9_1_10[0]->id}}" value="Si" checked disabled> Sí <br>
            <input type="radio" id="{{$preguntas_9_1_10[0]->id}}" name="{{$preguntas_9_1_10[0]->id}}" value="No" disabled> No
          @elseif($preguntas_9_1_10[0]->respuesta == 'No')
            <input type="radio" id="{{$preguntas_9_1_10[0]->id}}" name="{{$preguntas_9_1_10[0]->id}}" value="Si" disabled> Sí <br>
            <input type="radio" id="{{$preguntas_9_1_10[0]->id}}" name="{{$preguntas_9_1_10[0]->id}}" value="No" checked disabled> No
          @else
            <input type="radio" id="{{$preguntas_9_1_10[0]->id}}" name="{{$preguntas_9_1_10[0]->id}}" value="Si" checked disabled> Sí <br>
            <input type="radio" id="{{$preguntas_9_1_10[0]->id}}" name="{{$preguntas_9_1_10[0]->id}}" value="No" disabled> No
          @endif
        </div>
    </div>

    <!--Pregunta 2-->
    <div class="form-group">
        <label for="{{$preguntas_9_1_10[1]->id}}" class="control-label">{{$preguntas_9_1_10[1]->titulo}} Se recomienda anexar fotos como evidencia.</label>

        <div>
            <textarea class="form-control" id="{{$preguntas_9_1_10[1]->id}}" name="{{$preguntas_9_1_10[1]->id}}" disabled>{{$preguntas_9_1_10[1]->respuesta}}</textarea>
        </div>
    </div>

    @component('layouts.componentes.tabla_incisos')
      @slot('fotos')
          <style type='text/css'>
            .img_div {
              float: left;
              margin-right: 10px;
              margin-bottom: 15px;

            }
            .trailer_button{
              z-index:999;
              margin:1 20 -20 20;
              width:120px;
              border-radius:10px;
              margin-bottom: 15px;

            }
            .buttonimg{
              width:auto;
              height:auto;
            }

            img{
              width: auto;
              max-height: 100%
            }
            .line{
              border-bottom: 1px solid #111;
              display: block;
              margin-top: 60px;
              padding-top: 10px;
              position: relative;
            }
          </style>

            <?php
              $dirname = 'storage/infraestructura/asesorias/';
              $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
            ?>

            @if(sizeof($images) != 0)
              <h3 align="center">
                  Fotografías del inciso 9.1.10
              </h3>
              @foreach ($images as $image)
                <figure>
                  <div class='buttonimg'>
                    <div class="img_div">
                      <img src="<?php echo asset($image)?>" height="220"
                        alt="<?php echo $image?>"/>
                      <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>  
                    </div>
                  </div>
                </figure>
              @endforeach
		<br clear='all'/>
            @else
              <h2 align="center">No hay imagenes</h2>
            @endif
      @endslot
    @endcomponent
  <!-- ************************** FINAL 9.1.10 ************************** -->
	<!-- ************************** INICIO 9.1.11 ************************* -->
	<h3 class="text-justify">Inciso 9.1.11: El programa debe disponer de auditorios
   	y/o salas debidamente acondicionadas para actividades académicas, investigación,
  	y de preservación y difusión de la cultura</h3>

	@foreach($preguntas_9_1_11 as $pregunta_9_1_11)
		<div class="form-group">
			<label for="{{$pregunta->id}}" class="control-label">
			    {{$pregunta->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta->id}}" name="{{$pregunta->id}}"value="{{$pregunta->respuesta}}">{{$pregunta->respuesta}}</textarea>
			</div>
		</div>
	@endforeach

	@component('layouts.componentes.tabla_incisos_agregar')
		@slot('cabeza_tabla')
		  <tr>
		    <td>Nombre</td>
		    <td>Capacidad</td>
		</tr>
		@endslot

		@slot('cuerpo_tabla')
		@foreach($auditorios as $auditorio)
	      <tr>
		<td>{{ $auditorio->nombre }}</td>
		<td>{{ $auditorio->Capacidad }}</td>
	      </tr>
	    @endforeach
	      @endslot
		@endcomponent
	  @if(count($auditorios) == 0)
	    <h2 class="text-center">No hay registros en la base de datos</h2>
	  @endif
	@endsection

	<!-- ************************** FINAL 9.1.11 ************************** -->
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

  <!-- ************************** INICIO 9.1.13 ************************* -->
  <h3 class="text-justify">Inciso 9.1.13: Las facilidades sanitarias para los estudiantes
  y profesores del programa deben ser adecuadas</h3>

  <div class="form-group">
        <label for="{{$preguntas_9_1_13[0]->id}}" class="control-label">
            {{$preguntas_9_1_13[0]->titulo}}
        </label>

      <div>
        @if($preguntas_9_1_13[0]->respuesta == 'Si')
          <input type="radio" name="{{$preguntas_9_1_13[0]->id}}" value="Si" checked disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_13[0]->id}}" value="No" disabled> No
        @elseif($preguntas_9_1_13[0]->respuesta == 'No')
          <input type="radio" name="{{$preguntas_9_1_13[0]->id}}" value="Si" disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_13[0]->id}}" value="No" checked disabled> No
        @else
          <input type="radio" name="{{$preguntas_9_1_13[0]->id}}" value="Si" checked disabled> Sí <br>
          <input type="radio" name="{{$preguntas_9_1_13[0]->id}}" value="No" disabled> No
        @endif
      </div>
    </div>


    <!--Pregunta 2-->
    <div class="form-group">
        <label for="{{$preguntas_9_1_13[1]->id}}" class="control-label">
            {{$preguntas_9_1_13[1]->titulo}}
        </label>

        <div>
            <textarea class="form-control" id="{{$preguntas_9_1_13[1]->id}}" name="{{$preguntas_9_1_13[1]->id}}" disabled>{{$preguntas_9_1_13[1]->respuesta}}</textarea>
        </div>
    </div>

    @component('layouts.componentes.tabla_incisos')

      <!-- Tabla de todos los grupos -->
      @slot('cabeza_tabla')
        <th>Nombre</th>
        <th>Sexo</th>
      @endslot

      @slot('cuerpo_tabla')
        @foreach ($sanitarios as $sanitario)
        <tr>
            <td>{{ $sanitario->nombre }}</td>
            <td>{{ $sanitario->sexo }}</td>

        </tr>
        @endforeach
      @endslot

      @slot('fotos')
        <style type='text/css'>
          .img_div {
            float: left;
            margin-right: 10px;
            margin-bottom: 15px;
          }

          img{
            width: auto;
            max-height: 100%
          }
          .line{
            border-bottom: 1px solid #111;
            display: block;
            margin-top: 60px;
            padding-top: 10px;
            position: relative;
          }


        </style>

        <?php
          $dirs = array_filter(glob('storage/infraestructura/sanitarios/*'), 'is_dir');
          $hayImagen = 0;
          foreach ($dirs as $path) {
            $dir = $path.'/';
            $imagenes= glob($dir . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
            if (sizeof($imagenes) != 0) {
              $hayImagen = 1;
              break;
            }
          }
        ?>
        @if($hayImagen == 1)
          <h3 align="center">
              Fotografías del inciso 9.1.13
          </h3>
          @foreach($dirs as $path)
            <?php
              $dirname = $path.'/';
              $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
              $sanitarioID = substr($path, strlen('storage/infraestructura/sanitarios/'));
              $sanitarioReg = App\Sanitario::where('id', $sanitarioID)->first();
              $sanitarioNombre = $sanitarioReg->nombre;
            ?>
            @if(sizeof($images) != 0)
              <h3  class="line">Aula <?php echo $sanitarioNombre ?> </h3>
            @endif

            @foreach ($images as $image)
            <figure>
              <div class="buttonimg">
                <div class="img_div">
                  <img src="<?php echo asset($image)?>" height="220"
                        alt="<?php echo $image?>"/>
                  <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
                </div>
              </div>
            </figura>

            @endforeach
            <br clear='all'/>
          @endforeach
        @else
          <h3 align="center">No hay imagenes </h3>
        @endif
      @endslot
    @endcomponent
  <!-- ************************** FINAL 9.1.13 ************************** -->


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

	<!-- ************************** INICIO 9.2.2 ************************** -->
	<h3 class="text-justify">Inciso 9.2.2: Todo programa debe contar como mínimo con
   	el siguiente software: Lenguajes de programación, herramientas CASE, manejadores
  	de base de datos y paquetería en general</h3>

  	@foreach($preguntas_9_2_2 as $pregunta_9_2_2)
	    @component('layouts.textarea_input')
            @slot("nombre_input", $pregunta_9_2_2->id)
            @slot("label_input", $pregunta_9_2_2->titulo)
            @slot("valor_default", $pregunta_9_2_2->respuesta)
            @slot('extra', 'disabled')
        @endcomponent
	@endforeach

	@component('layouts.componentes.tabla_incisos_agregar')

        <h4>Tabla de lenguajes, herramientas case, manejadores de bases de datos y paqueteria</h4>
        @slot('cabeza_tabla')
            <th>Lenguajes de programación</th>
            <th>Herramientas CASE</th>
            <th>Manejadores de base de datos</th>
            <th>Paquetería general</th>
        @endslot

        @slot('cuerpo_tabla')
            @for($i = 0; $i < max(array(sizeof($lenguajes),
                                        sizeof($cases),
                                        sizeof($bds),
                                        sizeof($paqueterias))); $i++)
            <tr>
                <td>
            @if($i < sizeof($lenguajes))
                    {{$lenguajes[$i]}} <br>
            @endif
                </td>

                <td>
            @if($i < sizeof($cases))
                    {{$cases[$i]}} <br>
            @endif
                </td>

                <td>
            @if($i < sizeof($bds))
                    {{$bds[$i]}} <br>
            @endif
                </td>

                <td>
            @if($i < sizeof($paqueterias))
                    {{$paqueterias[$i]}} <br>
            @endif
                </td>
            </tr>
            @endfor
        @endslot
    @endcomponent
	<!-- ************************** FINAL 9.2.2 *************************** -->


	<!-- ************************** INICIO 9.2.5 ************************** -->
	<h3 class="text-justify">Inciso 9.2.5: Se debe contar con al menos tres plataformas
   	de cómputo diferentes que estén disponibles y accesibles para los estudiantes y
  	el personal docente del programa</h3>

  	@foreach($preguntas_9_2_5 as $pregunta_9_2_5)
		<div class="form-group">
			<label for="{{$pregunta_9_2_5->id}}" class="control-label">
			    {{$pregunta_9_2_5->titulo}}
			</label>

			<div>
                <textarea class="form-control" id="{{$pregunta_9_2_5->id}}" name="{{$pregunta_9_2_5->id}}" disabled="">{{$pregunta_9_2_5->respuesta}}</textarea>
			</div>
		</div>
	@endforeach

	@component('layouts.componentes.tabla_incisos')
        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Serial equipo</th>
            <th>Sistema Operativo</th>
			<th>Marca</th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($equipos as $equipo)
            <tr>
                <td>{{$equipo->serial}}</td>
                <td>{{$equipo->sistema_operativo}}</td>
				<td>{{$equipo->marca}}</td>
            </tr>
            @endforeach
        @endslot
    @endcomponent
	<!-- ************************** FINAL 9.2.5 ************************** -->

	<!-- ************************** INICIO 9.2.7 ************************** -->
	<h3 class="text-justify">Inciso 9.2.7: Debe contarse con al menos una red de área
   	local y una amplia, con software adecuado para las aplicaciones más comunes del
  	programa.</h3>

  	<div class="form-group">
		<label for="{{$preguntas_9_2_7[0]->id}}" class="control-label">{{$preguntas_9_2_7[0]->titulo}}</label>

        <div>
            @if($preguntas_9_2_7[0]->respuesta == 'Si')
              <input type="radio" name="{{$preguntas_9_2_7[0]->id}}" value="Si" checked disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[0]->id}}" value="No" disabled> No
            @elseif($preguntas_9_2_7[0]->respuesta == 'No')
              <input type="radio" name="{{$preguntas_9_2_7[0]->id}}" value="Si" disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[0]->id}}" value="No" checked disabled> No
            @else
              <input type="radio" name="{{$preguntas_9_2_7[0]->id}}" value="Si" checked disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[0]->id}}" value="No" disabled> No
            @endif
        </div>
    </div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas_9_2_7[1]->id}}" class="control-label text-center">{{$preguntas_9_2_7[1]->titulo}}</label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_7[1]->id}}" name="{{$preguntas_9_2_7[1]->id}}" disabled>{{$preguntas_9_2_7[1]->respuesta}}</textarea>
		</div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas_9_2_7[2]->id}}" class="control-label">{{$preguntas_9_2_7[2]->titulo}}</label>

        <div>
            @if($preguntas_9_2_7[2]->respuesta == 'Si')
              <input type="radio" name="{{$preguntas_9_2_7[2]->id}}" value="Si" checked disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[2]->id}}" value="No" disabled> No
            @elseif($preguntas_9_2_7[2]->respuesta == 'No')
              <input type="radio" name="{{$preguntas_9_2_7[2]->id}}" value="Si" disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[2]->id}}" value="No" checked disabled> No
            @else
              <input type="radio" name="{{$preguntas_9_2_7[2]->id}}" value="Si" checked disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[2]->id}}" value="No" disabled> No
            @endif
        </div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas_9_2_7[3]->id}}" class="control-label">{{$preguntas_9_2_7[3]->titulo}}</label>

        <div>
            @if($preguntas_9_2_7[3]->respuesta == 'Si')
              <input type="radio" name="{{$preguntas_9_2_7[3]->id}}" value="Si" checked disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[3]->id}}" value="No" disabled> No
            @elseif($preguntas_9_2_7[3]->respuesta == 'No')
              <input type="radio" name="{{$preguntas_9_2_7[3]->id}}" value="Si" disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[3]->id}}" value="No" checked disabled> No
            @else
              <input type="radio" name="{{$preguntas_9_2_7[3]->id}}" value="Si" checked disabled> Sí <br>
              <input type="radio" name="{{$preguntas_9_2_7[3]->id}}" value="No" disabled> No
            @endif
        </div>
	</div>
	<!-- ******************************************************************************************************** -->
	<div class="form-group">
		<label for="{{$preguntas_9_2_7[4]->id}}" class="control-label">{{$preguntas_9_2_7[4]->titulo}}</label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_7[4]->id}}" name="{{$preguntas_9_2_7[4]->id}}" disabled>{{$preguntas_9_2_7[4]->respuesta}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="{{$preguntas_9_2_7[5]->id}}" class="control-label">{{$preguntas_9_2_7[5]->titulo}}</label>

		<div>
            <textarea class="form-control" id="{{$preguntas_9_2_7[5]->id}}" name="{{$preguntas_9_2_7[5]->id}}" disabled>{{$preguntas_9_2_7[5]->respuesta}}</textarea>
		</div>
	</div>

	@component('layouts.componentes.tabla_incisos')
        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Serial equipo</th>
            <th>CPU</th>
            <th>Almacenamiento</th>
            <th>RAM</th>
            <th>Otras caracteristicas</th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($equipos as $equipo)
            <tr>
                <td>{{$equipo->serial}}</td>
                <td>{{$equipo->cpu}}</td>
                <td>{{$equipo->almacenamiento}}</td>
                <td>{{$equipo->ram}}</td>
                <td>{{$equipo->otras_caracteristicas}}</td>

            </tr>
            @endforeach
        @endslot
    @endcomponent
	<!-- ************************** FINAL 9.2.7 *************************** -->

  <!-- ************************** INICIO 9.2.12 ************************* -->
  <h3 class="text-justify">Inciso 9.2.11: Los profesores del programa deben contar
  con equipo de cómputo que les permita desempeñar adecuadamente su función. En
  el caso de los profesores de tiempo completo, estos deberán de contar con una
  computadora para su uso exclusivo</h3>

  @foreach($preguntas_9_2_11 as $pregunta_9_2_11)
    <div class="form-group">
      <label for="{{$pregunta_9_2_11->id}}" class="control-label">
          {{$pregunta_9_2_11->titulo}}
      </label>

      <div>
                <textarea class="form-control" id="{{$pregunta_9_2_11->id}}" name="{{$pregunta_9_2_11->id}}" disabled>{{$pregunta_9_2_11->respuesta}}</textarea>
      </div>
    </div>
  @endforeach

  @component('layouts.componentes.tabla_incisos')

        <h4>Tabla de equipos de redes</h4>
        @slot('cabeza_tabla')
            <th>Cubículo</th>
            <th>Profesor</th>
            <th>Cantidad equipo</th>
        @endslot

        @slot('cuerpo_tabla')
            @foreach($cubiculos as $cubiculo)
            <tr>
                <td>{{$cubiculo->nombre}}</td>
                <td>{{$cubiculo->profesor}}</td>
                <td>{{$cubiculo->cantidad_equipo}}</td>
            </tr>
            @endforeach
        @endslot

        @slot('fotos')
          <style type='text/css'>
            .img_div {
              float: left;
              margin-right: 10px;
              margin-bottom: 15px;

            }
            img{
              width: auto;
              max-height: 100%
            }
            .line{
              border-bottom: 1px solid #111;
              display: block;
              margin-top: 60px;
              padding-top: 10px;
              position: relative;
            }
          </style>

            <?php
              $dirs = array_filter(glob('storage/infraestructura/cubiculos/*'), 'is_dir');
              $hayImagen = 0;
              foreach ($dirs as $path) {
                $dir = $path.'/';
                $imagenes= glob($dir . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
                if (sizeof($imagenes) != 0) {
                  $hayImagen = 1;
                  break;
                }
              }
            ?>
            @if($hayImagen == 1)
              <h3 align="center">
                  Fotografías del inciso 9.2.11
              </h3>
              @foreach($dirs as $path)
                <?php
                  $dirname = $path.'/';
                  $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
                  $cubiculoID = substr($path, strlen('storage/infraestructura/cubiculos/'));
                  $cubiculoReg = App\Cubiculo::where('id', $cubiculoID)->first();
                  $cubiculoNombre = $cubiculoReg->nombre;
                ?>

                @if(sizeof($images) != 0)
                  <h2 class="line"><?php echo $cubiculoNombre ?></h2>
                @endif

                @foreach ($images as $image)
                <figure>
                  <div class="buttonimg">
                    <div class="img_div">
                      <img src="<?php echo asset($image)?>" height="220"
                            alt="<?php echo $image?>"/>
                      <figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>
                    </div>
                  </div>
                </figura>

                @endforeach
                <br clear='all'/>
              @endforeach
            @else
              <h2 align="center">No hay imagenes</h2>
            @endif
        @endslot
    @endcomponent
  <!-- ************************** FINAL 9.2.12 ************************** -->


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

	<!-- ************************** INICIO 9.2.14 ************************* -->
	<h3 class="text-justify">Inciso 9.2.14: Especificamente, el personal técnico,
    es suficiente y cuenta con el perfil adecuado para dar soporte, no solo a la
     infraestructura de telecomunicaciones y redes, sino también para el desarrollo
     de aplicaciones, incorporación de tecnologías emergentes, administración y
     hospedaje, desarrollo web, minería de datos, soluciones inteligentes, reingeniería
     de procesos mediante el use de las TIC y la administracion de la propia
     plataforma tecnológica y de aprendizaje que soporta el modelo educativo, ya
      sea a distancia o presencial. </h3>

	<div class="form-group">
	    <label for="{{$preguntas_9_2_14[0]->id}}" class="control-label"> {{$preguntas_9_2_14[0]->titulo}} </label>

	      <div>
	        @if($preguntas_9_2_14[0]->respuesta == 'Si')
	          <input type="radio" name="{{$preguntas_9_2_14[0]->id}}" value="Si" checked disabled> Sí <br>
	          <input type="radio" name="{{$preguntas_9_2_14[0]->id}}" value="No" disabled> No
	        @elseif($preguntas_9_2_14[0]->respuesta == 'No')
	          <input type="radio" name="{{$preguntas_9_2_14[0]->id}}" value="Si" disabled> Sí <br>
	          <input type="radio" name="{{$preguntas_9_2_14[0]->id}}" value="No" checked disabled> No
	        @else
	          <input type="radio" name="{{$preguntas_9_2_14[0]->id}}" value="Si" checked disabled> Sí <br>
	          <input type="radio" name="{{$preguntas_9_2_14[0]->id}}" value="No" disabled> No
	        @endif
	      </div>
	    </div>

	  <div class="form-group">
	    <label for="{{$preguntas_9_2_14[1]->id}}" class="control-label"> {{$preguntas_9_2_14[1]->titulo}} </label>

	    <div>
	      <textarea class="form-control" id="{{$preguntas_9_2_14[1]->id}}" name="{{$preguntas_9_2_14[1]->id}}" disabled>{{$preguntas_9_2_14[1]->respuesta}}</textarea>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="{{$preguntas_9_2_14[2]->id}}" class="control-label"> {{$preguntas_9_2_14[2]->titulo}} </label>

	    <div>
	      <input type="text" class="form-control" id="{{$preguntas_9_2_14[2]->id}}" name="{{$preguntas_9_2_14[2]->id}}" placeholder="Véase la tabla de abajo" value="{{$preguntas_9_2_14[2]->respuesta}}" disabled>
	    </div>
	  </div>

	  @component('layouts.componentes.tabla_incisos')
      @slot('cabeza_tabla')
        <th>Nombre</th>
        <th>Grado académico</th>
        <th>Certificados</th>
        <th>Años de experiencia</th>
      @endslot

      @slot('cuerpo_tabla')
        @foreach($tecnicos as $tecnico)
          <tr>
            <td>{{$tecnico->nombre}}</td>
            <td>{{$tecnico->grado_academico}}</td>
            <td>{{$tecnico->certificados}}</td>
            <td>{{$tecnico->anios_exp}}</td>
          </tr>
        @endforeach
      @endslot
    @endcomponent
	<!-- ************************** FINAL 9.1.12 ************************* -->
@endsection

