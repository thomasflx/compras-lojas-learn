<?php

$setores = array(
	'acougue' => 'Açougue',
	'Limpeza',
	'Padaria'
);

//echo $setores[1];

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

<body style="background-color:white;">
<?php
include('includes/header.php');
?>



	<h1>Lista de produtos da loja</h1>
	
	<h2>Escolha o setor da sua compra:</h2>
	

	<p><a href="http://localhost/compras-lojas-learn/setor.php?loja=lojas-mel&setor=acougue">Açougue</a></p>

	<p><a href="http://localhost/compras-lojas-learn/setor-limpeza.php">Limpeza</a></p>
	<p><a href="http://localhost/compras-lojas-learn/setor-padaria.php">Padaria</a></p>
	<p><a href="http://localhost/compras-lojas-learn/setor-hortali%C3%A7as.php">Hortaliças</a></p>
	<p><a href="http://localhost/compras-lojas-learn/setor-cosmeticos.php">Cosméticos / Perfumaria</a></p>
	
</body>
</html>
