@component("layouts.componentes.tabla_general")

	@slot("cabeza_tabla")
		<tr>
			<th>Sección</th>
			<th>Incisos</th>
			<th>Estado</th>
		</tr>
	@endslot

	@slot("cuerpo_tabla")
		<tr>
			<td>9.1 Inmobilario</td>
			<td>
				<ul class="list-unstyled">
					<li>
						@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_4') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.4 (Perfil y experiencia de los responsables de los servicios de cómputo)')
						@endcomponent
					</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_6') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.6 (Características de las aulas)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_7') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.7 (Mostrar la relación aulas - cursos)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_8') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.8 (Equipo de cómputo y audiovisual en las aulas)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_9') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.9 (Cubículos y áreas de profesores)')
						@endcomponent
					</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_10') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.10 (Espacios para asesoría y características)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_11') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.11 (Auditorios y actividades que ocurren en ellos)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_12') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.12 (Auditorios y su higiene)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_1_13') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.1.13 (Características de los Sanitarios)')
						@endcomponent</li>
				</ul>
			</td>

			<!--Estilo para los iconos-->
			<style>
				img{
					border-radius: 50%;
					width: 3%
				}
			</style>

			<td>
				<ul class="list-unstyled">
					<!-- Inciso 9.1.4 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.4')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif

						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>
					<!-- Inciso 9.1.6 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.6')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado'
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.7 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.7')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado'
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.8 -->
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.1.8')->first();
							$noRespContest = 0;
						?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							@php
								$estado = 'Completo';
								$mensaje = 'Inciso completado'
							@endphp
						@else
							<?php
								$respuestas = DB::table('preguntas')->where('inciso','9.1.8')->get();
								$noRespContest = 0;
							?>
							@foreach($respuestas as $respuesta)
								@if($respuesta->respuesta == '')
									@php
										$noRespContest = $noRespContest + 1;
									@endphp
								@endif
							@endforeach

							@if ($noRespContest == sizeof($respuestas))
								<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
								<?php
									$estado = 'Vacío';
									$mensaje = 'Todas las preguntas no tienen respuesta';
								?>
							@else
								<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
								<?php
								 	$estado = 'Incompleto';
									$mensaje = 'Hay preguntas sin contestar';
								?>
							@endif
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.9 -->
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.1.9')->first();
							$noRespContest = 0;
						?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							@php
								$estado = 'Completo';
								$mensaje = 'Inciso completado'
							@endphp
						@else
							<?php
								$respuestas = DB::table('preguntas')->where('inciso','9.1.9')->get();
								$noRespContest = 0;
							?>
							@foreach($respuestas as $respuesta)
								@if($respuesta->respuesta == '')
									@php
										$noRespContest = $noRespContest + 1;
									@endphp
								@endif
							@endforeach

							@if ($noRespContest == sizeof($respuestas))
								<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
								<?php
									$estado = 'Vacío';
									$mensaje = 'Todas las preguntas no tienen respuesta';
								?>
							@else
								<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
								<?php
								 	$estado = 'Incompleto';
									$mensaje = 'Hay preguntas sin contestar';
								?>
							@endif
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.10 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.10')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.11 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.11')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.12 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.12')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.13 -->
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.1.13')->first();
							$noRespContest = 0;
						?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							@php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							@endphp
						@else
							<?php
								$respuestas = DB::table('preguntas')->where('inciso','9.1.13')->get();
								$noRespContest = 0;
							?>
							@foreach($respuestas as $respuesta)
								@if($respuesta->respuesta == '')
									@php
										$noRespContest = $noRespContest + 1;
									@endphp
								@endif
							@endforeach

							@if ($noRespContest == sizeof($respuestas))
								<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
								<?php
									$estado = 'Vacío';
									$mensaje = 'Todas las preguntas no tienen respuesta';
								?>
							@else
								<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
								<?php
									$estado = 'Incompleto';
									$mensaje = 'Hay preguntas sin contestar';
								?>
							@endif
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>

		<tr>
			<td>9.2 Equipo</td>
			<td>
				<ul class="list-unstyled">
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_1') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.1 (Software usados por asignatura)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_2') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.2 (Tipos de Software del programa (case, lenguajes, manejadores de BD, paquetería en general))')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_5') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.5 (Plataformas de cómputo (Sistemas operativos))')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_7') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.7 (Redes disponibles para el programa)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_11') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.11 (Equipo de cómputo de maestros)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_12') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.12 (Soporte técnico)')
						@endcomponent</li>
					<li>@component("layouts.componentes.tooltip_general_link")
							@slot('url')
								{{ url('/inciso_9_2_14') }}
							@endslot
							@slot('titulo', 'Haga clic para ir al inciso')
							@slot('mensaje', '9.2.14 (Currículum del personal técnico)')
						@endcomponent</li>
				</ul>
			</td>

			<td>
				<ul class="list-unstyled">
					<!-- Inciso 9.2.1 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.1')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.2 -->
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.2.2')->first();
							$noRespContest = 0;
						?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							@php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							@endphp
						@else
							<?php
								$respuestas = DB::table('preguntas')->where('inciso','9.2.2')->get();
								$noRespContest = 0;
							?>
							@foreach($respuestas as $respuesta)
								@if($respuesta->respuesta == '')
									@php
										$noRespContest = $noRespContest + 1;
									@endphp
								@endif
							@endforeach

							@if ($noRespContest == sizeof($respuestas))
								<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
								<?php
									$estado = 'Vacío';
									$mensaje = 'Todas las preguntas no tienen respuesta';
								?>
							@else
								<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
								<?php
									$estado = 'Incompleto';
									$mensaje = 'Hay preguntas sin contestar';
								?>
							@endif
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.5 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.5')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.7 -->
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.2.7')->first();
							$noRespContest = 0;
						?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							@php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							@endphp
						@else
							<?php
								$respuestas = DB::table('preguntas')->where('inciso','9.2.7')->get();
								$noRespContest = 0;
							?>
							@foreach($respuestas as $respuesta)
								@if($respuesta->respuesta == '')
									@php
										$noRespContest = $noRespContest + 1;
									@endphp
								@endif
							@endforeach

							@if ($noRespContest == sizeof($respuestas))
								<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
								<?php
									$estado = 'Vacío';
									$mensaje = 'Todas las preguntas no tienen respuesta';
								?>
							@else
								<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
								<?php
									$estado = 'Incompleto';
									$mensaje = 'Hay preguntas sin contestar';
								?>
							@endif
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.11 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.11')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.12 -->
					<li>
						<?php
							$respuesta = DB::table('preguntas')->where('inciso','9.2.12')->first();
							$noRespContest = 0;
						?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							@php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							@endphp
						@else
							<?php
								$respuestas = DB::table('preguntas')->where('inciso','9.2.12')->get();
								$noRespContest = 0;
							?>
							@foreach($respuestas as $respuesta)
								@if($respuesta->respuesta == '')
									@php
										$noRespContest = $noRespContest + 1;
									@endphp
								@endif
							@endforeach

							@if ($noRespContest == sizeof($respuestas))
								<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
								<?php
									$estado = 'Vacío';
									$mensaje = 'Todas las preguntas no tienen respuesta';
								?>
							@else
								<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
								<?php
									$estado = 'Incompleto';
									$mensaje = 'Hay preguntas sin contestar';
								?>
							@endif
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>
					<!-- Inciso 9.2.14 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.14')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php
								$estado = 'Completo';
								$mensaje = 'Inciso completado';
							?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php
								$estado = 'Incompleto';
								$mensaje = 'Hay preguntas sin contestar';
							?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php
								$estado = 'Vacío';
								$mensaje = 'Todas las preguntas no tienen respuesta';
							?>
						@endif
						@component('layouts.componentes.tooltip_general')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
	@endslot
@endcomponent
