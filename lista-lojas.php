<?php
	$loja = $_GET['loja']; // Pega o valor de produto da URL
?>
<?php
/** COMEÇA CONEXÃO COM O BANCO */
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
	$lojas_query = $conn->prepare("SELECT * FROM lojas");
	$lojas_query->execute();

	// Retorna todas as linhas da busca (descomentar)
	$lojas_banco = $lojas_query->fetchAll(PDO::FETCH_ASSOC);

	// Retorna a primeira linha da busca
	// $lojas_banco = $lojas_query->fetch(PDO::FETCH_ASSOC);

	// Mostra os dados da variável e o tipo de dado
	var_dump($lojas_banco);
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
			
			body {
				background: #FFD4D4;				
			}
			
			img {
				width: 300px;
				height: 200px;
				border: 5px ridge gray;
				margin-bottom: 7px;
				object-fit: cover;
			}
			
			p {
				color: black;
			}
			
			a:link {
				text-decoration: none;
			}
			
			a:visited {
				color: blue;
			}
			
			a:houver {
				text-decoration: underline;
				backgrund: blue;				
			}
			
			a:active {
				background: red;
			}
			
			a:focus {
				background: green;
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
			
			.titulo-loja {
				text-shadow: 2px 2px #ff0000;
				font-size: 2em;
			}
			
			.loja-subtitulo {
				font-size: 20px;
				margin: center;
			}		
			
		</style>
	</head>
	<body>
		<?php
		include('includes/header.php');
		?>
		
		<div id="lojas">
			<?php // todo: fazer foreach ?>
				<div class="loja">
					<div class="loja-info">
						<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
							<?=$lojas_banco['nome']?>
						</a>
						<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
							<p>
								<?=$lojas_banco['descricao']?>
							</p>
						</a>
					</div>
					<!--<img
						src=""
						alt=""
					>-->
				</div>
		</div>
	</body>
</html>