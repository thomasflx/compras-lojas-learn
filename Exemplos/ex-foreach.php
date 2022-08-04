<?php


// Exemplo do que pode vir do banco
$lojas_arr = [
	[
		'nome' => 'Loja 1',
		'desc' => 'Eu sou a loja 1',
		'cep' => '07140-110'
	],
	[
		'nome' => 'Loja 2',
		'desc' => 'Eu sou a loja 2',
		'cep' => '07140-110'
	],
	[
		'nome' => 'Loja 3',
		'desc' => 'Eu sou a loja 3',
		'cep' => '07140-110'
	],
	[
		'nome' => 'Loja 4',
		'desc' => 'Eu sou a loja 4',
		'cep' => '07140-110'
	],
	[
		'nome' => 'Loja 5',
		'desc' => 'Eu sou a loja 5',
		'cep' => '07140-110'
	]
];

foreach($lojas_arr as $loja_indice => $loja_valor) {
	// echo $loja_indice . ' - ' . $loja_valor['nome'] . '<br />';
}