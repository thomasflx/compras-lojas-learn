<?php

if ( ! empty($_GET['produto'])) {
	$produto = $_GET['produto']; // Pega o valor de produto da URL
} else {
	$nao_existe = 1;
}

$detalhes = [
	'nome' => 'Água sanitária',
	'valor' => 'R$ 7,00',
	'descricao' => 'Muito boa pra manchar as camisetas pretas.',
	'img' => ''
];

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		include ('includes/head.php');
		?>
		
		<style>
			.produto-img {
				display: block;
			}
		</style>
	</head>
	<body style="background-color:beige;">
		<?php 
		include('includes/header.php');
		?>
		
		<?php if ($nao_existe) : ?>
			<h1>Produto não encontrado</h1>
		<?php else : ?>
			
			<h2><?=$detalhes['nome']?></h2>
			
			<?php if ( ! empty($detalhes['img'])) : ?>
				<img class="produto-img" src="<?=$detalhes['img']?>" alt="<?=$detalhes['nome']?>">
			<?php endif; ?>
		
			<ul>
				<li>Valor: <?=$detalhes['valor']?></li>
				<li>Descrição: <?=$detalhes['descricao']?></li>
			</ul>
		
		<?php endif; ?>
	</body>
</html>
