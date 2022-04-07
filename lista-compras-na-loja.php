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
				overflow-y: auto;
				overflow-x: auto;
				margin: auto;
				padding: 1px;
				text-shadow: 2px 2px #ff0000;
				font-size: 2em;
			}
			
			.produtos {
				background: #FFFEFE;
				width: 99%;
				overflow-y: auto;
				overflow-x: auto;
				margin: 17px auto 17px auto;
				border:  5px  #7B6C6C;
				padding: 17px;
				display: flex;
				justify-content: space-between;
			}
			
			.info-produto {
				font-size: 20px;
				margin: center;
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
				<a class="botoes" href="http://localhost/compras-lojas-learn/pagina-da-compra.php">
					Adicionar ao Carrinho
				</a>
			</div>	
			<img src="assets/img/gif-bye-Groot.gif" alt="A imagem do produto selecionado">
		</div>
	</body>
</html>