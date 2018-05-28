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
			<td>9.1</td>
			<td>
				<ul class="list-unstyled">
					<li>9.1.4</li>
					<li>9.1.6</li>
					<li>9.1.7</li>
					<li>9.1.8</li>
					<li>9.1.9</li>
					<li>9.1.10</li>
					<li>9.1.11</li>
					<li>9.1.12</li>
					<li>9.1.13</li>
				</ul>
			</td>

			<!--Estilo para los iconos-->
			<style>
				img{
					border-radius: 50%;
					width: 2%
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

						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo',$mensaje)
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo',$mensaje)
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo',$mensaje)
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>

		<tr>
			<td>9.2</td>
			<td>
				<ul class="list-unstyled">
					<li>9.2.1</li>
					<li>9.2.2</li>
					<li>9.2.5</li>
					<li>9.2.7</li>
					<li>9.2.11</li>
					<li>9.2.12</li>
					<li>9.2.14</li>
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo',$mensaje)
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
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
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo', $mensaje)
							@slot('mensaje', $estado)
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
	@endslot
@endcomponent
