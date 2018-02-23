<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/imgs/sao-jose-icon.png" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=  get_template_directory_uri() ?>/css/template.css">
	<link rel="stylesheet" type="text/css" href="<?=  get_template_directory_uri() ?>/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" href="<?= get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
	<title>Câmara Municipal de São José - Intranet</title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">

		<header class="container header col-lg-12 col-md-12 col-sm-12 col-xl-12 col-xs-12">
			<section class="header-logo col-lg-3">
				<a href="http://intranet.cmsj.sc.gov.br"><img src="<?= get_template_directory_uri(); ?>/imgs/sao-jose-logo.png" class="img-responsive col-lg-9"></a>
			</section>
			<section class="menu-top">
				<?php  wp_nav_menu( array( 'theme_location' => 'menu_topo', 'menu_class' => 'navbar nav nav-pills'
				) ); ?>
				<!-- 
				<form class="form-group form-inline col-lg-3">
							<input class="form-control input-busca" type="text" name="" placeholder="Pesquisar...">
							<button class="btn btn-default btn-busca form-control"><i class="fa fa-search"></i></button>
				</form>
						
				
				<ul class="navbar nav nav-pills">

					 <li class="nav-item"><a href="home.php">PRINCIPAL</a></li>
					<li class="nav-item"><a href="">INSTITUCIONAL</a></li>
					<li class="nav-item"><a href="single-noticias.php">NOTICIAS</a></li>
					<li class="nav-item"><a href="single.php">INFORMATIVOS</a></li>
					<li class="nav-item"><a href="">ARQUIVOS</a></li>
					<li class="nav-item"><a href="single.php">GUIA TELEFÔNICO</a></li>
				
					<li class="nav-item">

						<form class="form-group form-inline">
							<input class="form-control input-busca" type="text" name="" placeholder="Pesquisar...">
							<button class="btn btn-default btn-busca form-control"><i class="fa fa-search"></i></button>
						</form>

					</li>


				</ul>
			-->
		</section>
	</header>
	<!-- Fim Header -->
