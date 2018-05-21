@extends('layouts.verImagenes')

@section('title')
	 editar aula <?php $tipo; ?>
@endsection

@section('descripcion')
    <a href="/aulas" class="btn btn-primary">
        Regresar
    </a>

    <h1 class="text-center">Evidencias de aula <?php echo $tipo; ?></h1>
@endsection

@section('Fotografias')
	<!--<img src="<?php #echo asset("storage/infraestructura/aulas/101/8jazekipfvg01.jpg")?>"></img>-->
  <?php
    $dirname = 'storage/infraestructura/aulas/' . $tipo . '/';
    $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF]}", GLOB_BRACE);
	?>


    @foreach ($images as $image)
			<tr>
      <td><img src="<?php echo asset($image)?>" width="320" height="200"
							alt="<?php echo $image?>"></img></td>

			<!--Boton ver fotos-->

		@endforeach

@endsection
