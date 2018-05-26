@extends('layouts.verImagenes')

<style>
div.img{
  display:table;
}
div.img img{
 margin:0;
 padding:0;
}
div.img span{
 line-height:normal;
 font-size:11px;
 display:table-caption;
 margin:0;
 padding:0;
 background:#646464;
 color:white;
 font-style:italic;
 text-align:center;
 position:relative;
 height:0;
}
div.img span span{
 background:rgba(0, 0, 0, 0.4);
 display:block;
 padding:3px;
 text-shadow:0 0 15px white;
}
</style>

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
    $images= glob($dirname . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF],[jJ][pP][eE][gG]}", GLOB_BRACE);
	?>

	<head>
		<style type='text/css'>
			.img_div {
				float: left;
				margin-right: 10px;
				margin-bottom: 15px;}
			.trailer_button{
				z-index:999;
				margin:1 20 -20 20;
				width:181px;
				border-radius:10px;
				margin-bottom: 15px;

			}
			.buttonimg{
				width:auto;
				height:auto;

			}
		</style>
	</head>

    @foreach ($images as $image)

			<body>
				<figure>
					<div class='buttonimg'>
						<div class="img_div">
							<img src="<?php echo asset($image)?>" width="320" height="200"
								alt="<?php echo $image?>"/>
							<figcaption class="text-center"><?php echo pathinfo($image)['basename']?></figcaption>

							<!--<a href="{{ url('borrarImg', ['imagen' => $image, 'tipo'=> $tipo]) }}">-->
								<div class="row text-center">
									<!--<td>
										<button class="trailer_button"
											onclick="location.href='{!! route('borrarImg', ['imagen' => $image, 'tipo'=> $tipo]) !!}'">
												Borrar
										</button>
									</td>-->


									<form action="{{ route('borrarImg', ['tipo'=> $tipo, 'imagen' => pathinfo($image)['basename']]) }}" method="post">
                    {{ csrf_field() }}
                    <button class="trailer_button" type="submit" name="button">Borrar</button>
									</form>
								</div>


						</div>
					</div>
				</figure>
			</body>
		@endforeach

@endsection
