<?php

if ( !empty($_GET['produto'])) {
	$produto = $_GET['produto']; // Pega o valor de produto da URL
} else {
	$nao_existe = 1;
}

?>
<?php
/** COMEÇA CONEXÃO COM O BANCO */
/**$servername = "mysqldb";*/
$servername = "localhost";
$dbname = "compras_lojas_learn";
$username = "root";
$password = "";

try {
	// Cria uma conexão
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	// Arruma o retorno de erros do banco
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// Query
	// Alterar para ajustar a página
	$produto_query = $conn->prepare("SELECT * FROM produtos WHERE id = :prod;");
	$produto_query->execute(['prod' => $produto]);

	// Retorna todas as linhas da busca (descomentar)
	// $produto_banco = $produto_query->fetchAll(PDO::FETCH_ASSOC);

	// Retorna a primeira linha da busca
	$produto_banco = $produto_query->fetch(PDO::FETCH_ASSOC);

	// Mostra os dados da variável e o tipo de dado
	// var_dump($produto_banco);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
/** TERMINA CONEXÃO COM O BANCO */
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
		
		<?php if ( empty($produto_banco['nome'])) : ?>
			<h1>Produto não encontrado</h1>
		<?php else : ?>
			
			<h2><?=$produto_banco['nome']?></h2>
			
			<?php if (  empty($produto_banco['img'])) : ?>
				<img class="produto-img" src="<?=$produto_banco['img']?>" alt="<?=$produto_banco['nome']?>">
			<?php endif; ?>
		
			<ul>
				<li>Valor: <?=$produto_banco['valor']?></li> <!-- depois -->
				<li>Descrição: <?=$produto_banco['descricao']?></li>
			</ul>
		
		<?php endif; ?>
	</body>
</html>
