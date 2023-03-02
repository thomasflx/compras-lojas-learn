<?php

include('includes/init.php');
include('includes/db.php');

// Define as variáveis
$loja = null;

// Pega a variável da URL ex. lista-produtos-loja.php?loja=sonda&setor=mercearia
if (!empty($_GET['loja'])) {
	$loja = $_GET['loja'];
}

$produtos_loja_query = $conn->prepare("SELECT produtos.nome, produtos.id
	FROM produtos
	INNER JOIN produtos_loja on produtos.id = produtos_loja.produto_id
	WHERE loja_id = :id;");
$parametro = array('id' => $loja);
$produtos_loja_query->execute($parametro);
$produtos_loja_banco = $produtos_loja_query->fetchAll(PDO::FETCH_ASSOC);
var_dump($produtos_loja_banco);
?>



<!DOCTYPE html>
<html>
	<head>
		<?php
		include('includes/head.php');
		?>
		<link rel="stylesheet" type="text/css" href="<?=$siteurl . '/assets/css/lojas.css'?>" />
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		<main id="main">
			<!-- Atualizar para caso o retorno do banco seja vazio -->
			<?php if (isset($setores[$setor_chave])) : ?>
			
				<!-- Atualizar para o nome da loja retornados do banco -->
				<h1><?=$setores[$setor_chave]['titulo']?></h1>
			<?php endif; ?>	
				<?php foreach($setores[$setor_chave]['produtos'] as $chave => $produto ) : ?>
				<ul>
					<li><?=$produto ['nome']?></li>
				</ul>
				<?php if (!empty($loja['imagem'])): ?>
					<img class="lojas" src="<?=$siteurl . $loja['imagem']?>" alt="Imagem representativa da loja.">
				<?php else : 
					"SELECT setores.nome AS setores
						FROM produtos_lojas
						ORDER BY RAND (0,6)
						LIMIT 6;s
					";
				?>
				<?php endif; ?>
			<?php endforeach; ?>
		</main>	
	</body>
</html>
