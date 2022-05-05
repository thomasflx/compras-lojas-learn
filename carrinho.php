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
	
	<main id="main">
		<div class=flex-container>
			<div style="flex-basis:800px" id="main-flex">
				<h1> Carrinho de sompras</h1>
			</div>
			<div style="flex-basis:300px" id="side-flex">
				<h3>Subtotal (<?=$quantidade?> itens):</h3>
				<h2><?=$preco?></h2>
			</div>
	</main>
</body>
</html>