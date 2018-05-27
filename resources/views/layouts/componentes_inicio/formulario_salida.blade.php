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
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif


						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','El inciso no se ha iniciado')
							@slot('mensaje', $estado )
						@endcomponent
					</li>
					<!-- Inciso 9.1.6 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.6')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.7 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.7')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.8 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.8')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.9 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.9')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.10 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.10')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.11 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.11')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.12 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.12')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.1.13 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.1.13')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
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
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.2 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.2')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.5 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.5')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.7 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.7')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.11 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.11')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>

					<!-- Inciso 9.2.12 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.12')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>
					<!-- Inciso 9.2.14 -->
					<li>
						<?php $respuesta = DB::table('preguntas')->where('inciso','9.2.14')->first();?>
						@if ($respuesta->estado == 1)
							<img src="storage/recursos/semaforos/Green_rect.png" alt="Green_rect.png">
							<?php  $estado = 'Completo';?>
						@elseif ($respuesta->respuesta != '')
							<img src="storage/recursos/semaforos/Yellow_rect.png" alt="Yellow_rect.png">
							<?php $estado = 'Incompleto'; ?>
						@else
							<img src="storage/recursos/semaforos/Red_rect.png" alt="Red_rect.png">
							<?php $estado = 'Vacío'; ?>
						@endif
						@component('layouts.componentes.tooltip_general_link')
							@slot('url', '#')
							@slot('titulo','Hay preguntas sin contestar')
							@slot('mensaje', $estado)
						@endcomponent
					</li>
				</ul>
			</td>
		</tr>
	@endslot
@endcomponent
