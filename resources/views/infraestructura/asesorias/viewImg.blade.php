@extends('layouts.verImagenes')

@section('title')
	 Fotografias asesoria <?php $tipo; ?>
@endsection

@section('descripcion')
    <a href="/asesorias" class="btn btn-primary">
        Regresar
    </a>

    <h1 class="text-center">Evidencias de asesoria <?php echo $tipo; ?></h1>
@endsection

@section('Fotografias')
	<!--<img src="<?php #echo asset("storage/infraestructura/asesorias/101/8jazekipfvg01.jpg")?>"></img>-->
  <?php
    $dirname = 'storage/infraestructura/asesorias/' . $tipo . '/';
    $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
	?>


    @foreach ($images as $image)
			<tr>
      <td><img src="<?php echo asset($image)?>" width="320" height="200"
							alt="<?php echo $image?>"></img></td>

			<!--Boton ver fotos-->

		@endforeach

@endsection
