<?php

$setor = 'acougue';

$produtos = [
	'aves' => 'Aves',
	'bovinas' => 'Bovínas', 
	'suinas' => 'Suínas',
	'peixes' => 'Peixes'
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
	<body style= "background-color:#F0EAD2;">
		<?php
		include('includes/header.php');
		?>
		<h2>Escolha seus produtos e adicione no carrinho!</h2>
		
		<img class= "sertor img" src="assets/img/tipos-de-carne.jpg" alt="Variedade de Carnes">
		<?php
		foreach($produtos as $chave => $produto){
			echo '<a href="produto.php?produto='. $chave .'" class="botoes">'. $produto .'</a>';
		}
		?>

</html>

