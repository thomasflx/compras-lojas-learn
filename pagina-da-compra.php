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
			
			<label for="endereco">Endereço:</label>
			<input type="text" id="endereco" />
			
			<label for="n-da-casa">Número da Casa:</label>
			<input type="text" id="n-da-casa" />
			
			<label for="cep">CEP:</label>
			<input type="text" id="cep" />
			
			<label for="nome-completo">Nome Completo:</label>
			<input type="text" id="nome-completo" />
			
			<label for="cpf">CPF:</label>
			<input type="text" id="cpf" />
			
			<label for="e-mail">e-mail:</label>
			<input type="text" id="e-mail" />
			
			<label for="n-de-celular">Número de Celular:</label>
			<input type="text" id="n-de-celular" />
			
			<h3>
				help!
			</h3>
		</div>
	</body>
</html>