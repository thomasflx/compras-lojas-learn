<?php
// Produtos no carrinho
$produtos = [
	[
		'titulo' => 'Escova de dentes',
		'preco' => 5.99,
		'descricao' => 'Sint laboriosam vel nam. Consequatur laudantium repellat sunt sit nisi minus et. Dolorem mollitia ab cum repudiandae dolore fugit perspiciatis corrupti. Illum voluptas ut nobis.'
	],
	[
		'titulo' => 'Alface',
		'preco' => 4.50,
		'descricao' => 'Consequatur et consequatur veniam voluptas. Laboriosam est a aut fuga. Et similique expedita animi eum et necessitatibus necessitatibus. Dolore doloribus libero quam incidunt nihil blanditiis natus. Blanditiis qui est repudiandae ad.'
	],
	[
		'titulo' => 'Feijão',
		'preco' => 8.99,
		'descricao' => 'Reprehenderit asperiores et laboriosam sit autem. Temporibus et iure eius debitis non accusantium sed doloremque. Commodi eligendi voluptas optio ut debitis quae sit omnis. Ut ut quidem architecto sed.'
	],
	[
		'titulo' => 'Feijão',
		'preco' => 8.99,
		'descricao' => 'Rerum fugiat praesentium asperiores assumenda ipsam aut maxime cupiditate. Saepe iste aspernatur quas dolores. Ab consequatur tempore adipisci inventore deleniti dolorum. Perferendis dolor sequi natus eos aut voluptates qui rerum. Ratione eos cumque accusamus ex amet.'
	]
];

$quantidade = count($produtos);

$preco = 0;
foreach($produtos as $produto) {
	$preco = $preco + $produto['preco'];
}

?>

<!DOCTYPE html>

<html>
<<<<<<< HEAD
	<head>
		
		<?php
		include('includes/head.php');
		?>
		
	</head>
	<style>
	
		.flex-container {
		  display: flex;
		  background-color: DodgerBlue;
		  flex-wrap: wrap;
		}

		#main-flex {
		  background-color: orange;
		}

		#side-flex {
		  background-color: red;
		  }
		 
		.flex-container > div {
		  margin: 10px;
		  padding: 20px;
		  background-color: gray;

	</style>
	<body>

		<?php
		include('includes/header.php');
		?>
		<div id="vc-sel">
			<h2>
				Você selecionou:
			</h2>
		</div>
		<div></div>
		<div class="produtos">
			<div class="info-produto">
				<table>
					<thead>
						<tr>
							<th>Produto</th>
							<th>Descrição</th>
							<th>Quantidade</th>
							<th>Entrega</th>
							<th>Preço</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="assets/img/gif-bye-Groot.gif" alt="A imagem do produto selecionado"></td>	
							<td>Exemplo de descrição</td>
							<td>
								<label for="qnt"></label>
								<input type="number" id="qnt"/>
							</td>
							<td>4 dias úteis</td>
							<td>R$ 50,00</td>
						</tr>
					</tbody>
				</table>
				<a class="botoes" href="http://localhost/compras-lojas-learn/pagina-da-compra.php">
					Comprar
				</a>
				<div></div>
			</div>		
		</div>
		
	</body>
</html>

















=======
=======
>>>>>>> d13dd48af360678525b455ba8e2cf17a3898b0b3
=======
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
			background-color: red;
			flex-basis: 30em;
		}
		 
		.flex-container > div {
			margin: 10px;
			padding: 20px;
			background-color: gray;
		}
			
		#produto-div {
			margin-top: 0.83em;
			margin-bottom: 0em;
			margin-right: 0.5em;
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
>>>>>>> 131f51d990a37eef987d9fcc797b7f9af432e814
	<main id="main">
		<div class=flex-container>
			<div id="main-flex">
				<h1> Carrinho de compras</h1>
					<?php foreach($produtos as $produto) : ?>
						<div class=flex-produtos>
							<div id="produto-div">
								<h2 id="nome-produto">		<?=$produto['titulo']?>		</h2>
								<p id="descricao-produto">	<?=$produto['descricao']?>	</p>
							</div>
							<div id="preco-div">
								<h2 id="preco-produto">		R$<?=$produto['preco']?>		</h2>
							</div>
						</div>
					<?php endforeach; ?>
			</div>
			<div id="side-flex">
				<h3>Total (<?=$quantidade?> itens):</h3>
				<h2>R$<?=$preco?></h2>
				<div>
					<button class="botoes">Continue comprando</button>
					<button class="btn-fechar-pedido">Fechar pedido</button>
				</div>
			</div>
		</div>
	</main>
</body>
<<<<<<< HEAD
</html>
<<<<<<< HEAD
>>>>>>> b0d40b410f73aab8403028b8d2cd90f67a79dd65
=======
>>>>>>> d13dd48af360678525b455ba8e2cf17a3898b0b3
=======
</html>
>>>>>>> 131f51d990a37eef987d9fcc797b7f9af432e814
