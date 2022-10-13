<?php

include('includes/init.php');
include('includes/db.php');

// Query
$lojas_query = $conn->prepare("SELECT * FROM lojas");
$lojas_query->execute();

// Retorna todas as linhas da busca
$lojas_banco = $lojas_query->fetchAll(PDO::FETCH_ASSOC);
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
			<h1 id="tittle-pag">Conheça nossas Lojas</h1>
			<div id="lojas">
				<?php foreach ($lojas_banco as $loja) : ?>
					<a class="loja" href="<?=$siteurl?>/lista-produtos-loja.php">
						<div class="loja-info">
							<h2 class="titulo-loja"><?=$loja['nome']?></h2>
							<p class="loja-subtitulo">
								<?=$loja['descricao']?>
							</p>
						</div>
						<?php if (!empty($loja['imagem'])): ?>
							<img class="logo-loja" src="<?=$siteurl . $loja['imagem']?>" alt="Imagem representativa da loja.">
						<?php endif; ?>
					</a>
				<?php endforeach; ?>
			</div>
		</main>
	</body>
</html>