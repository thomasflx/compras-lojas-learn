<?php

$setor = 'padaria';

$produtos = [
	'pao-frances' => 'Pão Francês',
	'pao-quijo' => 'Pão de Queijo', 
	'baguete' => 'Baguete'
];

?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		include('includes/head.php');
		?>
		<style>
		
		</style>
	</head>
	<body style= "background-color:#D58B8C;">
		<?php
		include('includes/header.php');
		?>
		<h2>Escolha seus produtos e adicione no carrinho!</h2>
		
		<img class= "sertor img" src="assets/img/padaria-ou-loja-de-pao.jpg" alt="Variedade de Pães">
		<?php
		foreach($produtos as $chave => $produto){
			echo '<a href="produto.php?produto='. $chave .'" class="botoes">'. $produto .'</a>';
		}
		?>

</html>

