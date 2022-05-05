<?php

$setor = 'perfumaria';

$produtos = [
	'higiene-pessoal' => 'Higiêne Pessoal',
	'cabelo' => 'Cabelo', 
	'farmacia' => 'Farmácia',
	'produtos-criancas' => 'Produtos Infantis'
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
		<?php
		foreach($produtos as $chave => $produto){
			echo '<a href="produto.php?produto='. $chave .'" class="botoes">'. $produto .'</a>';
		}
		?>

</html>



