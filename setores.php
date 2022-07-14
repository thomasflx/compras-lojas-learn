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
<?php
$servername = "localhost";
$dbname = "compras_lojas_learn";
$username = "phpmyadmin";
$password = "123";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$setor_query = $conn->prepare("SELECT * FROM setores WHERE id = :set;");
	$setor_query->execute(['set' => $setor]);

	$setor_banco = $setor_query->fetch(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
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
