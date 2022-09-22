<?php

include('includes/init.php');
include('includes/db.php');

// Define as variáveis
$loja = null;
$setor_chave = null;

// Pega a variável da URL ex. lista-produtos-loja.php?loja=sonda&setor=mercearia
if (!empty($_GET['loja'])) {
	$loja = $_GET['loja'];
}
if (!empty($_GET['setor'])) {
	$setor_chave = $_GET['setor'];
}

// todo: Conectar e buscar dados do banco - Abner
// todo: Utilizar a variável $siteurl

<!DOCTYPE html>

<html>

<head>
	<?php
	include('includes/head.php');
	?>
	

	<!-- todo: deixar a página tinindo kkkk-->
	<style>
		.img-prod {
			
		}
	</style>
</head>

<body>
	<?php
	include('includes/header.php');
	?>
	
	<?php if (isset($setores[$setor_chave])) : ?>
	
		<h1><?=$setores[$setor_chave]['titulo']?></h1>
		
		<?php foreach($setores[$setor_chave]['produtos'] as $chave => $produto ) : ?>
			<ul>
				<li><?=$produto?></li>
			</ul>
			<?php if (!empty($loja['imagem'])): ?>
				<img class="img-prod" src="<?=$siteurl . $loja['imagem']?>" alt="Imagem representativa da loja.">
			<?php endif; ?>
		<?php endforeach; ?>
		
	<?php else : ?>
	
		<h1>Todas as Seções</h1>
		
		<h2>Escolha o setor da sua compra:</h2>
		
		<?php foreach($setores as $chave => $setor) : ?>
			<p><a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php?loja=<?=$loja?>&setor=<?=$chave?>"><?=$setor['titulo']?></a></p>
		<?php endforeach; ?>
	
	<?php endif; ?>
</body>
</html>
