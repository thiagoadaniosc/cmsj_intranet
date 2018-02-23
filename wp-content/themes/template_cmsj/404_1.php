<?php //header('Location:/wordpress');  ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/imgs/sao-jose-icon.png" type="image/x-icon" />
	<title>404 - Página Não Encontrada</title>
	<style type="text/css">
		body {
			background-image: url(<?= get_template_directory_uri(); ?>/imgs/back.jpg);
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;

		}
		h1 {
			margin: auto;
			text-align: center;
			color: white;
			font-size: 5vh;
			text-transform: uppercase;
			font-family: 'Fira Sans', sans-serif;
		}
		h2 {
			text-align: center;
			margin:  auto;
			padding: 30px;
			margin-top: 20px;

1		}

		a{
			text-decoration: none;
			color: #FFFFFF;
			transition: 1s;
			background-color: #2C2C2C;
			padding: 20px;
			text-transform: uppercase;
			font-family: 'Open Sans', sans-serif;
			font-style: italic;
			border: 2px solid #2C2C2C;
		}
		a:hover {
			border: 2px solid white;
			background-color: transparent;
		}

	</style>
	<p style="text-align: center; padding-top: 15vh;"><img src="<?= get_template_directory_uri(); ?>/imgs/sao-jose-logo.png"></p>
	<h1>
		<span style="font-size: 100px; color: #FFFFFF">404 Erro</span>
		<br>
		<span style="background-color: #2C2C2C;">Página Não Encontrada</span>
		<!-- <span style="background-color: #2C2C2C;">A Página que você está procurando <br>NON ECZISTE!</span>-->
	</h1>
	<h2><a href="/">Página Inicial</a></h2>
</body>
</html>