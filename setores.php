<?php

// Define as variáveis
$loja = null;

// Pega a variável da URL ex. lista-produtos-loja.php?loja=sonda&setor=mercearia
if (!empty($_GET['loja'])) {
	$loja = $_GET['loja'];
}

if ($loja == 'lojas-mel') {
	$setores = array(
		'mercearia' => 'Mercearia',
		'perfumaria' => 'Perfumaria',
		'bebidas' => 'Bebidas Prontas'
	);
} else {
	$setores = array(
		'mercearia' => 'Mercearia',
		'limpeza' => 'Produtos de limpeza',
		'padaria' => 'Padaria Sonho de Padeiro',
		'perfumaria' => 'Perfumaria',
		'acougue' => 'Açougue',
		'hortifrut' => 'Coisa de Feira',
		'bebidas' => 'Bebidas Prontas'
	);
}

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

<body>
	<?php
	include('includes/header.php');
	?>
	
	<?php if (empty($loja)) : ?>
		<h1>Todas as Seções</h1>
	<?php else : ?>
		<h1><?=$loja?> Seções</h1>
	<?php endif; ?>
	
	<h2>Escolha o setor da sua compra:</h2>
	
	<?php foreach($setores as $chave => $setor) : ?>
		<p><a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php?loja=<?=$loja?>&setor=<?=$chave?>"><?=$setor?></a></p>
	<?php endforeach; ?>
</body>
</html>
