<?php

// Define as variáveis
$loja_id = null;

// Pega a variável da URL ex. lista-produtos-loja.php?loja=sonda&setor=mercearia
if (!empty($_GET['loja'])) {
	$loja_id = $_GET['loja'];
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

	// Busca os produtos da loja
	$produtos_loja_query = $conn->prepare("SELECT * FROM produtos_loja WHERE loja_id = :id;");
	$parametro = array('id' => $loja_id);
	$produtos_loja_query->execute($parametro);
	$produtos_loja_banco = $produtos_loja_query->fetchAll(PDO::FETCH_ASSOC);

	// Busca o nome da loja
	$loja_nome_query = $conn->prepare("SELECT nome FROM lojas WHERE id = :id;");
	$loja_nome_query->execute(['id' => $loja_id]);
	$loja_nome_banco = $loja_nome_query->fetch(PDO::FETCH_ASSOC);

	// var_dump($loja_nome_banco);

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
	
	<?php if (empty($loja_id)) : ?>
		<h1>Todas as Seções</h1>
	<?php else : ?>
		<h1><?=$loja_nome_banco['nome']?> Seções</h1>
	<?php endif; ?>
	
	<h2>Escolha o setor da sua compra:</h2>
	
	<?php // todo: buscar o setor no banco e arrumar o foreach ?>
	<?php foreach($setores as $chave => $setor) : ?>
		<p><a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php?loja=<?=$loja_id?>&setor=<?=$chave?>"><?=$setor?></a></p>
	<?php endforeach; ?>
</body>
</html>
