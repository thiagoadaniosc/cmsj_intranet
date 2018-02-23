<?php //header('Location:/wordpress');  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/imgs/sao-jose-icon.png" type="image/x-icon" />
	<title>404 - Página Não Encontrada</title>
	<style type="text/css">
		h1 {
			margin: auto;
			text-align: center;
			color: #478BF6;
	
			font-size: 5vh;
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
			background-color: #414141;
			padding: 20px;
			text-transform: uppercase;
			font-family: 'Open Sans', sans-serif;
			font-style: italic;
			border: 2px solid #414141;
		}
		a:hover {
			color: #414141;
			background-color: transparent;
		}

	</style>
	<p style="text-align: center; padding-top: 15vh;"><img src="<?= get_template_directory_uri(); ?>/imgs/sao-jose-logo_black.png"></p>
	<h1>404 - Página Não Encontrada</h1>
	<h2><a href="/">Página Inicial</a></h2>
</body>
</html>