<?php

$setor = 'limpeza';

$produtos = [
	'cloro' => 'Cloro',
	'detergente' => 'Detergente',
	'sabao-po' => 'Sabão em pó',
	'sabao-liquido' => 'Sabão liquido',
	'amaciante' => 'Amaciante',
	'agua-sanitaria' => 'Água sanitária'
];

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		include ('includes/head.php');
		?>
		
		<style>
			.setor-img {
				display: block;
			}
		</style>
	</head>
	<body style="background-color:beige;">
		<?php 
		include('includes/header.php');
		?>
		
		<h2>Escolha seus produtos e adicione no carrinho!</h2>
		
		<img class="setor-img" src="assets/img/economizar-gastos-produtos-limpeza.jpg" alt="produtos de limpeza">
	
		<?php
		foreach($produtos as $chave => $produto){
			echo '<a href="produto.php?produto='. $chave .'" class="botoes">'. $produto .'</a>';
		}
		?>
		
		
</html>
        
	
	</body>
</html>
