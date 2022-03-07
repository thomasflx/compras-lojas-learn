<!DOCTYPE html>
<meta charset="utf8" />
<title>Compras Lojas Learn</title>
<html>
	<head>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https: //fonts.googleapis.com/css2? family= Hind:wght@700 & display=swap" rel="stylesheet">
		
		<?php
		include('includes/head.php');
		?>
		
		<style>
			
			body {
				background: #FFD4D4;				
			}
			
			h2 {
				margin: center;
			}
			
			.produtos {
				background: rgb(230, 230, 230);
				width: 91%;
				height: 180px;
				overflow-y: auto;
				overflow-x: hidden;
				margin: 17px 0px 19px 6px;
				border: #FFD4D4;
				padding: 6px;
			}
			
			
			
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		
		<h2>Você selecionou:</h2>
		<div class="produtos">
		<p></p>
		</div>
	</body>
</html>