<?php

// Incluir os arquivos db.php e init.php

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

// todo: Conectar e buscar dados do banco
// todo: Utilizar a variável $siteurl

?>

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
	
	<!-- Atualizar para caso o retorno do banco seja vazio -->
	<?php if (isset($setores[$setor_chave])) : ?>
	
		<!-- Atualizar para o nome da loja retornados do banco -->
		<h1><?=$setores[$setor_chave]['titulo']?></h1>
		
		<?php foreach($setores[$setor_chave]['produtos'] as $chave => $produto ) : ?>
			<ul>
				<!-- Pegar o nome do produto -->
				<li><?=$produto?></li>
			</ul>
			<?php if (!empty($loja['imagem'])): ?>
				<img class="img-prod" src="<?=$siteurl . $loja['imagem']?>" alt="Imagem representativa da loja.">
			<?php endif; ?>
		<?php endforeach; ?>
		
	<?php else : ?>
		
		<!-- Retorno caso nenhuma loja seja encontrada -->
		<!-- Trazer 8 produtos aleatórios -->
	
	<?php endif; ?>
</body>
</html>
