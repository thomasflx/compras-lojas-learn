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
				background: rgb (0,0,7);
			}
			
			h1, h2 {
				background: rgb (0,0,7);
				color: rgb(59, 20, 217);
			}
			
			#test-flex {
				display: none;
				height: 100vh;
				flex-wrap: wrap;
				align-items: center;
				justify-content: end;
			}
			#test-flex p {
				width: 200px;
				height: 200px;
				background: #ddd;
				margin: 15px;
			}
			
			#lojas {
			}
			
			.loja {
				display: flex;
				padding: 15px;
				border-bottom: 1px solid #333;
			}
			
			.titulo-loja {
				font-size: 2em;
			}
			
			li {
				border-top: 1px solid black;
                border-bottom: 1px solid black;
			}
			
			img {
				width: 200px;
				height: 200px;
				margin: center;
				border: 5px ridge black;
				margin-right: 20px;
				margin-bottom: 7px;
				object-fit: cover;
			}
			
			.lojas {
				font: monospace;
				margin: auto;
			}
			
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		
		<div id="test-flex">
			<p>1</p>
			<p>2</p>
			<p>3</p>
			<p>4</p>
			<p>5</p>
			<p>6</p>
			<p>7</p>
			<p>8</p>
		</div>
		
		<div id="lojas">
			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						Lojas Mel
					</a>
					<p>
						Vende: De Papai Cruel tocando trompete, a tudo entre R$1,00 e R$99,00
					</p>
				</div>
				<img src="assets/img/danilo-alvesd-tWWXxURT94g-unsplash.jpg">
			</div>

			<div class="loja">
				<a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
					<h1 class="lojas">Feirinha do Zé</h1>
				</a>
				<img src = "https://media.istockphoto.com/photos/green-organic-broccoli-on-the-table-picture-id1340593316?b=1&k=20&m=1340593316&s=170667a&w=0&h=ToW2h55MHkiWv30UtAw4urgND3rW4oC9kpFgUdEDCKo=">
				<p>
					Vende: De frutas e verduras, a brinquedos de má qualidade sem garantia.
				</p>
			</div>

			<div class="loja">
				<a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
					<h1 class="lojas">Padaria Thomas e Seus Amigos</h1>
				</a>
				<img src = "https://images.unsplash.com/photo-1593113249517-6baf5dd14fb4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1010&q=80">
				<p>
					Vende: De pão, a bilhete do bingo de domingo.
				</p>
			</div>
		</div>

	</body>
</html>