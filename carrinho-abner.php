<?php
	$quantidade = 2;
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
