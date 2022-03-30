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
				margin: auto;
			}
			
			a:link {
				text-decoration: none;
			}
			
			a:visited {
				color: blue;
			}
			
			a:houver {
				text-decoration: underline;
				backgrund: blue;				
			}
			
			a:active {
				background: red;
			}
			
			a:focus {
				background: green;
			}
			
			img {
				width: 300px;
				height: 170px;
				border: 5px ridge gray;
				margin-bottom: 7px;
				object-fit: cover;
			}
			
			#vc-sel {
				background: #FFFEFE;
				width: 36%;
				height: 65px;
				overflow-y: auto;
				overflow-x: auto;
				margin: auto;
				border: 5px ridge #7B6C6C;
				padding: 1px;
				text-shadow: 2px 2px #ff0000;
				font-size: 2em;
			}
			
			.produtos {
				background: #FFFEFE;
				width: 99%;
				height: 180px;
				overflow-y: auto;
				overflow-x: auto;
				margin: 17px auto 17px auto;
				border:  5px  #7B6C6C;
				padding: 17px;
				display: flex;
				justify-content: space-between;
			}
			
			.info-produto {
				font-family: fantasy;
				font-size: 20px;
				margin: center;
			}
			
			.botoes {
				background-color: #FFD4D4;
				font-family: fantasy;
				border: 5px ridge #7B6C6C;
				display: inline-block
			}
			
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		<div id="vc-sel">
			<h2>
				Você selecionou:
			</h2>
		</div>
		<div class="produtos">
			<div class="info-produto">
				<h2>
					Exemplo de Produto
				</h2>
				<p>
					A descrição do produto
				</p>
				<a class="botoes" href="">
					<p>Adicionar ao Carrinho</p>
				</a>
			</div>	
			<img src="assets/img/gif-bye-Groot.gif" alt="A imagem de um produto">
		</div>
	</body>
</html>