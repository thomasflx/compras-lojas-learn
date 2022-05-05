<?php

$lojas = array(
	array(
		'titulo' => 'Lojas Mel',
		'descricao' => 'Vende: De Papai Cruel tocando trompete, a tudo entre de R$1,00 a R$99,00.',
		'imagem' => ''
	),
	array(
		'titulo' => '',
		'descricao' => '',
		'imagem' => ''
	)
);

//echo $lojas[0]['titulo'];

?>

<!DOCTYPE html>
<meta charset="utf8" />
<title>Compras Lojas Learn</title>
<html>
	<head>
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
			
			p {
				color: black;
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
				font-size: 2em;
			}
			
			.loja-subtitulo {
				font-size: 20px;
				margin: center;
			}		
			
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		
		<?php
		$lojas = array(
			array(
				'titulo' => 'Lojas Mel',
				'descricao' => 'Vende: De Papai Cruel tocando trompete, a tudo entre de R$1,00 a R$99,00.',
				'imagem' => 'src="assets/img/IMG-20220120-WA0033.jpg" alt="Fachada das lojas mel desenhada"'
			),
			array(
				'titulo' => 'Feirinha do Zé:',
				'descricao' => 'Vende: De frutas e verduras, a brinquedos de má qualidade sem garantia alguma.',
				'imagem' => 'src="http://localhost/compras-lojas-learn/assets/img/ja-ma--gOUx23DNks-unsplash.jpg" alt="Muitas frutas e legumes orgânicos, para satisfazer sua curiosidade tem mais legumes do que frutas"'
			),
			array(
				'titulo' => 'Padaria Thomas e Seus Amigos:',
				'descricao' => 'Vende: De pão, a bilhete do bingo de domingo.',
				'imagem' => 'src="http://localhost/compras-lojas-learn/assets/img/cptm.jpg" alt="O carro da CPTM passando em São Paulo"'
			)
		);
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
						<?php 
						echo $lojas[0]['titulo'];
						?>
					</a>
					<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<p>
							<?php 
							echo $lojas[0]['descricao'];
							?>
						</p>
					</a>
				</div>
				<img
					<?php 
					echo $lojas[0]['imagem'];
					?>
				>
			</div>
			
			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<?php 
						echo $lojas[1]['titulo']; 
						?>
					</a>
					<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<p> 
							<?php 
							echo $lojas[1]['descricao']; 
							?>
						</p>
					</a>
				</div>
				<img 
					<?php 
					echo $lojas[1]['imagem'];
					?>
				>
			</div>

			<div class="loja">
				<div class="loja-info">
					<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<?php 
						echo $lojas[2]['titulo'];
						?>
					</a>
					<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<p>
							<?php 
							echo $lojas[2]['descricao'];
							?>
						</p>
					</a>
				</div>
				<img
					<?php
					echo $lojas[2]['imagem'];
					?>
				>
			</div>
		</div>
	</body>
</html>