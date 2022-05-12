<?php

$setores = array(
	'acougue' => 'Açougue',
	'limpeza' => 'Limpeza',
	'padaria' => 'Padaria',
	'frutas-legumes' => 'Frutas e Legumes',
	'perfumaria' => 'Perfumaria'
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

<body style="background-color:#F0EAD2;">
<?php
include('includes/header.php');
?>



	<h1>Todas as Seções</h1>
	
	<h2>Escolha o setor da sua compra:</h2>
	

	<p><a href="http://localhost/compras-lojas-learn/acouguemix.php">Açougue</a></p>
	<p><a href="http://localhost/compras-lojas-learn/mercearia.php"> Mercearia</a></p>
	<p><a href="http://localhost/compras-lojas-learn/setor.php?loja=lojas-mel&setor=acougue">Limpeza</a></p>
	<p><a href="http://localhost/compras-lojas-learn/testedesetor.php">Padaria</a></p>
	<p><a href="http://localhost/compras-lojas-learn/coisadefeira.php">Hortaliças</a></p>
	<p><a href="http://localhost/compras-lojas-learn/perfumaria.php">Perfumaria</a></p>
	
	
</body>
</html>
