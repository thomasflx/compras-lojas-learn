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
			
			img {
				width: 300px;
				height: 200px;
				border: 5px ridge gray;
				margin-bottom: 7px;
				object-fit: cover;
			}
			
			/* Caixa de testes com flexbox */
			#test-flex p {
				width: 200px;
				height: 200px;
				background: #ddd;
				margin: 15px;
			}
			
			#test-flex {
				display: none;
				height: 100vh;
				flex-wrap: wrap;
				align-items: center;
				justify-content: end;
			}				
			
			/* Cotrole das lojas */
			.loja {
				display: flex;
				padding: 15px;
				border-bottom: 1px solid #333;
				justify-content: space-between;
			}
			
			.lojas {
				margin: auto;
			}
			
			.titulo-loja {
				text-shadow: 2px 2px #ff0000;
				font-family: fantasy;
				font-size: 2em;
			}
			
			.loja-subtitulo {
				font-family: monospace;
				font-size: 20px;
				margin: center;
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
					<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<p>Vende: De Papai Cruel tocando trompete, a tudo entre de R$1,00 a R$99,00.</p>
					</a>
				</div>
				<img src="assets/img/IMG-20220120-WA0033.jpg" alt="Fachada das lojas mel desenhada">
			</div>
			
			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						Feirinha do Zé:
					</a>
					<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<p>Vende: De frutas e verduras, a brinquedos de má qualidade sem garantia alguma.</p>
					</a>
				</div>
				<img src="http://localhost/compras-lojas-learn/assets/img/ja-ma--gOUx23DNks-unsplash.jpg" alt="Muitas frutas e legumes orgânicos, para satisfazer sua curiosidade tem mais legumes do que frutas">
			</div>

			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						Padaria Thomas e Seus Amigos:
					</a>
					<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<p>Vende: De pão, a bilhete do bingo de domingo.</p>
					</a>
				</div>
				<img src = "http://localhost/compras-lojas-learn/assets/img/cptm.jpg" alt="O carro da CPTM passando em São Paulo">
			</div>
		</div>

	</body>
</html>