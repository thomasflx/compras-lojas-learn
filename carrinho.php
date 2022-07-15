<?php

$produtos_no_carrinho = [1, 2, 3];

$servername = "localhost";
$dbname = "compras_lojas_learn";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$produto_query = $conn->query("SELECT * FROM produtos;");
	$produto_banco = $produto_query->fetchAll(PDO::FETCH_ASSOC);
	var_dump($produto_banco);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

$preco = 0;
foreach($produtos as $produto) {
	$preco = $preco + $produto['preco'];
}

?>

<!DOCTYPE html>

<html>
<head>
	<?php
	include('includes/head.php');
	?>
	<style>
		.flex-container {
			display: flex;
			background-color: DodgerBlue;
			flex-wrap: nowrap;
		}

		.flex-produtos {
			display: flex;
			background-color: DodgerBlue;
			flex-wrap: nowrap;
		}

		#main-flex {
			background-color: orange;
			flex-grow: 10;
		}

		#side-flex {
			background-color: orange;
			flex-direction: column;
			flex-basis: 25%;
		}
		
		#side-item {
			background-color: red;
		}
		 
		.flex-container > div {
			margin: 5px;
			padding: 10px;
			background-color: gray;
		}
			
		#produto-div {
			margin-top: 0.83em;
			margin-bottom: 0em;
			margin-right: 0.2em;
			background-color: white;
			flex-grow: 1;
			max-width: %;
		}

		#preco-div {
			margin-top: 0.83em;
			margin-bottom: 0em;
			margin-left: 0.5em;
			background-color: white;
			flex-basis: 5em;
		}
			
		#nome-produto {
			font-size: 1.5em;
			margin-top: 0em;
			margin-bottom: 0.1em;
			font-weight: bold;
		}

		#descricao-produto {
			font-size: 0.85em;
			margin-top: 0em;
			margin-bottom: 0em;
			font-weight: normal;
		}

		#preco-produto {
			font-size: 2em;
			margin-top: 0em;
			margin-bottom: 0em;
			font-weight: bold;
		}

		.btn-continue-comprando {
			background-color: white;
		}

		.btn-fechar-pedido {
			background-color: DodgerBlue;
		}
	</style>
</head>
<body>
	<?php
	include('includes/header.php');
	?>
	<main id="main">
		<div class=flex-container>
			<div id="main-flex">
				<h1> Carrinho de compras</h1>
					<?php foreach($produto_banco as $produto) : ?>
						<div class=flex-produtos>
							<div id="produto-div">
								<h2 id="nome-produto">		<?=$produto['nome']?>		</h2>
								<p id="descricao-produto">	<?=$produto['descricao']?>	</p>
							</div>
							<div id="preco-div">
								<?php // todo: Pegar o preço do banco, tabela produtos_loja ?>
								<h2 id="preco-produto">									<!-- R$<?=$produto['preco']?> -->	</h2>
							</div>
						</div>
					<?php endforeach; ?>
			</div>
			<div id="side-flex">
				<div id="side-item">
					<?php // todo: pegar a quantidade do banco ?>
					<h3>Total (<?=$quantidade?> itens):</h3>
					<h2>R$<?=$preco?></h2>
					<div>
						<button class="botoes">Continue comprando</button>
						<button class="btn-fechar-pedido">Fechar pedido</button>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>