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
<?php
$servername = "localhost";
$dbname = "compras_lojas_learn";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$produto_query = $conn->query("SELECT * FROM produtos WHERE id = $produto;");
	$produto_banco = $produto_query->fetch();
	var_dump($produto_banco);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
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
				<li>Valor: <?=$detalhes['valor']?></li> <!-- depois -->
				<li>Descrição: <?=$detalhes['descricao']?></li>
			</ul>
		
		<?php endif; ?>
	</body>
</html>
