<?php
/** COMEÇA CONEXÃO COM O BANCO */
$servername = "mysqldb";
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
	$lojas_query = $conn->prepare("SELECT * FROM lojas");
	$lojas_query->execute();

	// Retorna todas as linhas da busca (descomentar)
	$lojas_banco = $lojas_query->fetchAll(PDO::FETCH_ASSOC);

	// Retorna a primeira linha da busca
	// $lojas_banco = $lojas_query->fetch(PDO::FETCH_ASSOC);

	// Mostra os dados da variável e o tipo de dado
	// var_dump($lojas_banco);
} 
catch(PDOException $e) {
	echo "Connection failed:" . $e->getMessage();
}
/** TERMINA CONEXÃO COM O BANCO */
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		include('includes/head.php');
		?>
		<style>
			#lojas .loja .logo-loja {
				width: 300px;
				height: 200px;
				border: 5px ridge gray;
				margin-bottom: 7px;
				object-fit: cover;
			}

			#lojas .loja {
				text-decoration: none;
			}
			#lojas .loja:visited {
				color: inherit;
			}
			#lojas .loja:hover, #lojas .loja:visited:hover {
				background: #ddd;
			}
			#lojas .loja:active, #lojas .loja:visited:active {
			}
			#lojas .loja:focus, #lojas .loja:visited:focus {
			}

			#lojas .loja .titulo-loja {
				text-shadow: 2px 2px #ff0000;
				font-size: 1.5em;
			}

			#lojas .loja .loja-subtitulo {
				font-size: 20px;
				margin: center;
			}

			/* Caixa de testes com flexbox */
			#test-flex p {
				width: 200px;
				height: 200px;
				background: #ddd;
				margin: 15px;
			}

			#test-flex {
				display: none;
				height: 100vh;
				flex-wrap: wrap;
				align-items: center;
				justify-content: end;
			}

			/* Cotrole das lojas */
			.loja {
				display: flex;
				padding: 15px;
				border-bottom: 1px solid #333;
				justify-content: space-between;
			}

			.lojas {
				margin: auto;
			}
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		<main id="main">
			<h1>Conheça nossas Lojas</h1>
			<div id="lojas">
				<?php foreach ($lojas_banco as $loja) : ?>
					<a class="loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
						<div class="loja-info">
							<h2 class="titulo-loja"><?=$loja['nome']?></h2>
							<p class="loja-subtitulo">
								<?=$loja['descricao']?>
							</p>
						</div>
						<img class="logo-loja" src="http://localhost/compras-lojas-learn/assets/img/exemplo-43363006.jpg" alt="Exemplo de imagem.">
					</a>
				<?php endforeach; ?>
			</div>
		</main>
	</body>
</html>