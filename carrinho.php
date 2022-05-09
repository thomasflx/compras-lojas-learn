<?php
// Produtos no carrinho
$produtos = [
	[
		'titulo' => 'Escova de dentes',
		'preco' => 5.99,
		'descricao' => '1 em cada 10 dentistas aprova'
	],
	[
		'titulo' => 'Alface',
		'preco' => 4.50,
		'descricao' => 'Não dura 2 dias na geladeira'
	],
	[
		'titulo' => 'Feijão',
		'preco' => 8.99,
		'descricao' => 'Ou compra ou não compra'
	],
	[
		'titulo' => 'Feijão',
		'preco' => 8.99,
		'descricao' => 'Ou compra ou não compra'
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
<<<<<<< HEAD
	
<<<<<<< HEAD
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
	<main id="main">
		<div class=flex-container>
			<div style="flex-basis:700px" id="main-flex">
				<h1> Carrinho de compras</h1>
				<div id="carrinho-produtos">
					<ul>
						<?php foreach($produtos as $produto) : ?>
							<li><?=$produto['titulo']?></li>
							<li>descricao</li>
							<li>5,50</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div style="flex-basis:300px" id="side-flex">
				<h3>Subtotal (<?=$quantidade?> itens):</h3>
				<h2><?=$preco?></h2>
			</div>
	</main>
</body>
</html>
<<<<<<< HEAD
>>>>>>> b0d40b410f73aab8403028b8d2cd90f67a79dd65
=======
>>>>>>> d13dd48af360678525b455ba8e2cf17a3898b0b3
