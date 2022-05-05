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
		]
	];

	$quantidade = count($produtos);
	$preco = "RS$1.000,00";

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
	<main id="main">
		<div class=flex-container>
			<div style="flex-basis:700px" id="main-flex">
				<h1> Carrinho de compras</h1>
				<div id="carrinho-produtos">
					<ul>
						<?php foreach($produtos as $produto) : ?>
							<li><?=$produto['titulo']?></li>
							<li>descricao</li>
							<li>Valor</li>
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
