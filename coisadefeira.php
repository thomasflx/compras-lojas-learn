<?php

$setor = 'hortalicas';

$produtos = [
	'frutas' => 'Frutas',
	'legumes' => 'Legumes', 
	'verduras' => 'Verduras',
	'tempero' => 'Tempero Fresco'
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
		
		<img class= "sertor img" src="assets/img/frutas-e-verduras-de-janeiro-capa (1).jpg" alt="Legumes, verduras e frutas">
		<?php
		foreach($produtos as $chave => $produto){
			echo '<a href="produto.php?produto='. $chave .'" class="botoes">'. $produto .'</a>';
		}
		?>

</html>


