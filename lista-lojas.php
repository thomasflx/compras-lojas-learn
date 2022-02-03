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
				border: 5px ridge black;
				margin-left: 500px;
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
						Lojas Mel:
					</a>
					<p>
						Vende: De Papai Cruel tocando trompete, a tudo entre de R$1,00 a R$99,00.
					</p>
				</div>
				<img src="https://photos.app.goo.gl/v5umeMH35TJMmqAo7">
			</div>

			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						Feirinha do Zé:
					</a>
					<p>
						Vende: De frutas e verduras, a brinquedos de má qualidade sem garantia.
					</p>
				</div>
				<img src = "https://images.unsplash.com/photo-1598357850706-0188bc0372b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80">
				
			</div>

			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						Padaria Thomas e Seus Amigos:
					</a>
					<p>
						Vende: De pão, a bilhete do bingo de domingo.
					</p>
				</div>
				<img src = "https://images.unsplash.com/photo-1593113249517-6baf5dd14fb4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1010&q=80">
			</div>
		</div>

	</body>
</html>