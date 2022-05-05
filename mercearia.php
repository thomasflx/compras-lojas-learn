<?php

$setor = 'mercearia';

$produtos = [
	'basico' => 'Açúcar,Arroz',
	'biscoito' => 'Bolachas, Salgadinho', 
	'cafe' => 'Café Solúvel, Chá',
	'massas' => 'Macarrão'
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
		
		<img class= "sertor img" src="assets/img/compra-simples.jpg" alt="mercearia">
		<?php
		foreach($produtos as $chave => $produto){
			echo '<a href="produto.php?produto='. $chave .'" class="botoes">'. $produto .'</a>';
		}
		?>

</html>



