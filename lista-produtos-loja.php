<?php

// Define as variáveis
$loja = null;
$setor = null;

// Pega a variável da URL ex. lista-produtos-loja.php?loja=sonda&setor=mercearia
if (!empty($_GET['loja'])) {
	$loja = $_GET['loja'];
}
if (!empty($_GET['setor'])) {
	$setor = $_GET['setor'];
}

// Todos os setores e seus produtos
$setores = array(
	'mercearia' => [
		'titulo' => 'Mercearia',
		'produtos' => [
			'arroz' => 'Arroz',
			'acucar' => 'Açucar',
			'bolachas' => 'Bolachas',
			'salgadinho' => 'Salgadinho', 
			'cafe-soluvel' => 'Café Solúvel',
			'cha' => 'Chá',
			'macarrao' => 'Macarrão'
		]
	],
	'limpeza' => [
		'titulo' => 'Produtos de limpeza',
		'produtos' => [
			'candida' => 'Cândida',
			'ajax' => 'Ajax',
			'detergente' => 'Detergente'
		]
	],
	'padaria' => [
		'titulo' => 'Padaria Sonho de Padeiro',
		'produtos' => [
			'pao-frances' => 'Pão Francês',
			'pao-doce' => 'Pão doce',
			'pao-queijo' => 'Pão de queijo'
		]
	]
);

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
	
	<?php if (isset($setores[$setor])) : ?>
	
		Eu sou um setor que existe
		
	<?php else : ?>
	
		<h1>Todas as Seções</h1>
		
		<h2>Escolha o setor da sua compra:</h2>
		
		<?php foreach($setores as $c => $v) : ?>
			<p><a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php?loja=<?=$loja?>&setor=<?=$c?>"><?=$v['titulo']?></a></p>
		<?php endforeach; ?>
	
	<?php endif; ?>
</body>
</html>
