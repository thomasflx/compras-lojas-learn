<!DOCTYPE html>
<meta charset="utf8" />
<title>Compras Lojas Learn</title>
<html>
	<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https: //fonts.googleapis.com/css2? family= Hind:wght@700 & display=swap" rel="stylesheet">
		
		<?php
				include('includes/head.php');
		?>
		
		<style>
			
			body {
				background: rgb (0,0,7);
			}
			
			h1 {
				color: rgb(59, 20, 217);
			}
			
			p {
				font: bold;
				background: rgb(59, 20, 217);
			}
			
			ul, li {
				border-top: 1px solid black;
                border-bottom: 1px solid black;
			}
			
			img {
				width: 300px;
				margin: center;
				border: 5px ridge black;
				float: left;
				margin-right: 20px;
				margin-bottom: 7px;
			}
			
			.lojas {
				font: monospace;
				margin: auto;
			}
			
		</style>
	</head>
	<body>
		<?php
include('includes/header.php');
		?>
		
		<ul>
			<li>
				<a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
					<h1 class="lojas">Lojas Mel</h1>
				</a>
				<p>
					<div><img src= "https://lh3.googleusercontent.com/82oiV76DTo3ycABXzinulOsuc9yYHzJiOncRJ8zYO64HPYLN_iklWDSFRzMYldBMV-5s4k_FUdtLfZTx00_dsWYY3LKSMXY-X6-USXsAng7HvKWn3FMKgLRM90eNUhp12yaBgHIN6v68aGuYBfGaiWwcDUksHvQz3N-ZVYW7NN8l5mx5khKiYiVNrEUutH-crThP7kzMetRBrLtNKvzZ9yqX3KLSlpDngQCFkqte-q2K1mOwiBW4ZGcnUlFp2_5oxGQ-L0D6ituJgPxvBoE6Aj6gww3XRRK-Y3lwa3Ljvm4sq8Mz4OJBF8fDt-mrUMC6EyBqDJNxYikOiyH_b52Nfn8XkR1uhzz1kDI3hXCRdvKwtGO2dhNFPKXyFdnZX05641shtqHQ-wxKKUTxt_BaTfFXgTcI3OUlf8TD_I8Hfr7q-Dvengf9jCeixyXbqDtgCG0mLNltZX7FeWaddJLs4Mc3Q-YGlcEzWOw_mHyCQM3XYBMYarFqp2kSy_RL3Enus6p2ggOuGPTNYgzMGONGatOcleAEPC5L5ZounrziHyaB9krOiHW5jnOS5otVex40PkkVguasBQ87GKgrCcQrCr_df56kMK3m-HWRRhEXcMUvOczwfptMt_1DcYobBNqnR-SZY3F46O_SwfgIxYLoa_N9ZMkWd6HisrmLYtLCkydqq8E2XPdDd6HCR7VZSk0Kt95AA-6Py5Qd5loIJxblrL-YAg=w938-h625-no?authuser=1"></div>
					Vende: De Papai Cruel tocando trompete, a tudo entre R$1,00 e R$99,00
				</p>
			</li>
			
		</ul>
		<ul>
			
			<li>
				<a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
					<h1 class="lojas">Feirinha do Zé</h1>
				</a>
				<p>
					<div><img src = "https://media.istockphoto.com/photos/green-organic-broccoli-on-the-table-picture-id1340593316?b=1&k=20&m=1340593316&s=170667a&w=0&h=ToW2h55MHkiWv30UtAw4urgND3rW4oC9kpFgUdEDCKo="></div>
					Vende: De frutas e verduras, a brinquedos de má qualidade sem garantia.
				</p>
			</li>
			
		</ul>
		<ul>

			
			<li>
				<a href="http://localhost/compras-lojas-learn/lista-produtos-loja.php">
					<h1 class="lojas">Padaria Thomas e Seus Amigos</h1>
				</a>
				<p>
					<div><img src = "https://images.unsplash.com/photo-1593113249517-6baf5dd14fb4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1010&q=80"></div>
					Vende: De pão, a bilhete do bingo de domingo.
				</p>
			</li>
		</ul>

	</body>
</html>