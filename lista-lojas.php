<?php

$lojas = array(
	array(
		'titulo' => 'Lojas Mel',
		'descricao' => 'Vende: De Papai Cruel tocando trompete, a tudo entre de R$1,00 a R$99,00.',
		'imagem' => 'assets/img/IMG-20220120-WA0033.jpg',
		'alt' => 'Fachada das lojas mel desenhada'
	),
	array(
		'titulo' => 'Feirinha do Zé:',
		'descricao' => 'Vende: De frutas e verduras, a brinquedos de má qualidade sem garantia alguma.',
		'imagem' => 'http://localhost/compras-lojas-learn/assets/img/ja-ma--gOUx23DNks-unsplash.jpg',
		'alt'	=> 'Muitas frutas e legumes orgânicos, para satisfazer sua curiosidade tem mais legumes do que frutas'
	),
	array(
		'titulo' => 'Padaria Thomas e Seus Amigos:',
		'descricao' => 'Vende: De pão, a bilhete do bingo de domingo.',
		'imagem' => 'http://localhost/compras-lojas-learn/assets/img/cptm.jpg',
		'alt' => 'O carro da CPTM passando em São Paulo'
	)
);

//echo $lojas[0]['titulo'];

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
			<?php foreach($lojas as $loja) : ?>
				<div class="loja">
					<div class="loja-info">
						<a class="titulo-loja" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
							<?php 
							echo $loja['titulo'];
							?>
						</a>
						<a class="loja-subtitulo" href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
							<p>
								<?php 
								echo $lojas[0]['descricao'];
								?>
							</p>
						</a>
					</div>
					<img
						src="<?=$loja['imagem']?>"
						alt="<?=$loja['alt']?>"
					>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>

/*create table  lojas ( id int auto_increment not null,
	nome text,
	CEP int,    
	numero int,
	complemento int,
	slug text,
	descricao text default null comment'Campo de descrição',
	
	primary key(id)
);           
create table produtos_loja (
	id int auto_increment,
	produto_id text,
	loja_id text, 
	preco int,
	quantidade int, 
	validade date, 
	setor_id text,
	slug varchar(40) not null,
	descricao text default null comment 'Campo de descrição',
	
	primary key(id)
);*/  

/* fazer insert into loja */