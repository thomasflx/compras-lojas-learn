<?php

// Incluir os arquivos db.php e init.php
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
// todo: Utilizar a variável $siteurl

$produtos_setor_query = $conn->prepare("SELECT produtos.nome AS produto, setores.nome AS setor
	FROM produtos_loja
	INNER JOIN setores ON setores.id = produtos_loja.id
	INNER JOIN produtos ON produtos.id = produtos_loja.id
	WHERE produtos_loja.setor_id = :id
	ORDER BY produtos.nome ASC
	LIMIT 1 OFFSET 0;
");
$parametro = array('id' => $setor_chave);
$produtos_setor_query->execute($parametro);
$produtos_setor_fetch = $produtos_setor_query->fetchAll(PDO::FETCH_ASSOC);

var_dump($produtos_setor_fetch);

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
		<!-- Trazer 8 produtos aleatórios (RANDOM - order by - limit) -->
<?php
	"SELECT setores.nome AS setores
	FROM produtos_lojas
	ORDER BY RAND (0,6)
	LIMIT 6;
";

?>
	
<?php

?>
	
	<?php endif; ?>
</body>
</html>
