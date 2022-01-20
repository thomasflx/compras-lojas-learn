<!DOCTYPE html>
<meta charset="utf8" />
<title>ompras Lojas Learn</title>
<html>
	<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https: //fonts.googleapis.com/css2? family= Hind:wght@700 & display=swap" rel="stylesheet">
		
		<?php
				include('includes/head.php'); 
		?>
		
		<style>
			
			h1 {
				color: rgb(59, 20, 217);
			}
			
			img, h2 {
				font: bold;
				width: 220px;
				margin: auto;
				border: 7px ridge black;
			}
			
			.lojas {
				font: bold;
				margin: auto;
			}
			
			#menu {
				text-align: center;
				padding: 4px 0;
				background: black;
				color: white;
			}
			
			#menu a {
				text-decoration: none;
				color: white;
			}
			
		</style>
	</head>
	<body>
		<?php
include('includes/header.php');
		?>
		
		<div id="menu">
			<a href="http://localhost/compras-lojas-learn/lista-lojas.php">Lojas</a>
			<a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">Produtos</a>
		</div>
		
		<ul>
			<li>
				<a href="http://localhost/compras-lojas-learn/.php">
					<h1 class="lojas">Lojas Mel</h1>
					<div><img src = "https://media.istockphoto.com/photos/green-organic-broccoli-on-the-table-picture-id1340593316?b=1&k=20&m=1340593316&s=170667a&w=0&h=ToW2h55MHkiWv30UtAw4urgND3rW4oC9kpFgUdEDCKo="></div>
				</a>
				<h2>Vende: De tudo</h2>
			</li>
			<li>
				<a href="http://localhost/compras-lojas-learn/.php">
					<h1 class="lojas">Feirinha do Zé</h1>
					<div><img src = "https://media.istockphoto.com/photos/green-organic-broccoli-on-the-table-picture-id1340593316?b=1&k=20&m=1340593316&s=170667a&w=0&h=ToW2h55MHkiWv30UtAw4urgND3rW4oC9kpFgUdEDCKo="></div>
				</a>
				<h2>Vende: De frutas e verduras a brinquedos de má qualidade.</h2>
			</li>
			<li>
				<a href="http://localhost/compras-lojas-learn/.php">
					<h1 class="lojas">Padaria Thomas e Seus Amigos</h1>
					<div><img src = "https://media.istockphoto.com/photos/green-organic-broccoli-on-the-table-picture-id1340593316?b=1&k=20&m=1340593316&s=170667a&w=0&h=ToW2h55MHkiWv30UtAw4urgND3rW4oC9kpFgUdEDCKo="></div>
				</a>
				<h2>Vende: De pão a bilhete do bingo de domingo</h2>
			</li>
		</ul>

	</body>
</html>