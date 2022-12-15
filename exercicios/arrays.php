<pre>
<?php

// $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// print_r($numeros);

// shuffle($numeros);
// print_r($numeros);

// sort($numeros);
// print_r($numeros);

// rsort($numeros);
// print_r($numeros);

$cidades = [
    'sao_paulo' => 'São Paulo',
    'guarulhos' => 'Guarulhos',
    'osasco' => 'Osasco',
    'pirituba' => 'Pirituba'
];
print_r($cidades);

$informacoes = [
    'sao_paulo' => [
        'populacao' => 13000000,
        'area' => 540000,
        'densidade' => 50
    ],
    'guarulhos' => [
        'populacao' => 1000000,
        'area' => 50000,
        'densidade' => 10
    ],
    'pirituba' => [
        'populacao' => 500000,
        'area' => 10000,
        'densidade' => 6
    ],
    'osasco' => [
        'populacao' => 7000000,
        'area' => 20000,
        'densidade' => 9
    ]
];

$chaves_cidades = array_keys($cidades);

shuffle($chaves_cidades);

foreach($chaves_cidades as $chave) {
    echo $cidades[$chave];
    print_r($informacoes[$chave]);
}

?>