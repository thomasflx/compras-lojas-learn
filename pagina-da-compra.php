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
			
			.produtos {
				background: #FFFEFE;
				width: 99%;
				overflow-y: auto;
				overflow-x: auto;
				margin: 17px auto 17px auto;
				border: radius 5px  #7B6C6C;
				padding: 17px;
				display: block;
				justify-content: space-between;
			}			
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		
		<div class="produtos">	
			<h2>
				Exemplo de Produto
			</h2>
			
			<div class="produtos">	
				<label for="endereco">Endereço:</label>
				<input type="text" id="endereco" />
			</div>
			
			<div class="produtos">	
				<label for="n-da-casa">Número da Casa:</label>
				<input type="number" id="n-da-casa" />
			</div>
			
			<div class="produtos">	
				<label for="cep">CEP:</label>
				<input type="number" id="cep" />
			</div>
			
			<div class="produtos">	
				<label for="nome-completo">Nome Completo:</label>
				<input type="text" id="nome-completo" />
			</div>
			
			<div class="produtos">	
				<label for="cpf">CPF:</label>
				<input type="number" id="cpf" />
			</div>
			
			<div class="produtos">	
				<label for="e-mail">e-mail:</label>
				<input type="e-mail" id="e-mail" />
			</div>
			
			<div class="produtos">	
				<label for="n-de-celular">Número de Celular:</label>
				<input type="number" id="n-de-celular" />
			</div>
		</div>
	</body>
</html>