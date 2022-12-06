<?php

//-->Arrays a serem manipulados
$quadrados1 = [
    'alfa' => [
        'altura' => 5,
        'largura' => 7
    ],
    'iota' => [
        'altura' => 1,
        'largura' => 9
    ],
    'gama' => [
        'altura' => 2,
        'largura' => 2
    ],
    'omega' => [
        'altura' => 6,
        'largura' => 3
    ],
    'episolon' => [
        'altura' => 8,
        'largura' => 4
    ]
];

$quadrados2 = [
    'capa' => [
        'altura' => 35,
        'largura' => 1
    ],
    'beta' => [
        'altura' => 9,
        'largura' => 4
    ],
    'gama' => [
        'altura' => 4,
        'largura' => 1
    ],
    'teta' => [
        'altura' => 2,
        'largura' => 9
    ]
];
//<--

//-->Utilização da função array_udiff()
function comparaArea($array1, $array2): int|float
{
    $area1 = $array1['altura'] * $array1['largura'];
    $area2 = $array2['altura'] * $array2['largura'];

    if($area1 < $area2) {
        return -1;
    } elseif($area1 > $area2) {
        return 1;
    } else {
        return 0;
    }
}

echo 'Array 1 = ['.PHP_EOL;
foreach ($quadrados1 as $indice => $valor) {
    echo $indice.' => Altura: '.$valor['altura'].', Largura: '.$valor['largura'].PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Array 1 = ['.PHP_EOL;
foreach ($quadrados2 as $indice => $valor) {
    echo $indice.' => Altura: '.$valor['altura'].', Largura: '.$valor['largura'].PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

$resultado = array_udiff($quadrados1, $quadrados2, 'comparaArea');
echo 'No array 2 não existem elementos com áreas(base x altura) iguais a dos elementos "';
foreach ($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" do array 1'.PHP_EOL.PHP_EOL;
//<--

//-->Utilização da função array_diff_ukey()
function comparaCaracteres($array1, $array2): int|float
{
    $letras1 = mb_strlen($array1);
    $letras2 = mb_strlen($array2);

    if($letras1 == $letras2) {
        return 0;
    } elseif($letras1 > $letras2) {
        return 1;
    } else {
        return -1;
    }
}

$resultado = array_diff_ukey($quadrados1, $quadrados2, 'comparaCaracteres');
echo 'No array 2 não existem índices com a mesma quantidade de caracteres que a dos elementos "';
foreach ($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" do array 1'.PHP_EOL.PHP_EOL;
//<--

//-->Utilização da função array_udiff_assoc()
$resultado = array_udiff_assoc($quadrados1, $quadrados2, 'comparaArea');
echo 'No array 2 não existem elementos com a mesma área e índice dos elementos "';
foreach ($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" do array 1'.PHP_EOL.PHP_EOL;
//<--

//-->Utilização da função array_udiff_uassoc()
$resultado = array_udiff_uassoc($quadrados1, $quadrados2, 'comparaArea', 'comparaCaracteres');
echo 'No array 2 não existem elementos que possuam a mesma área e índices com a mesma quantidade de caracteres dos elementos "';
foreach ($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" do array 1'.PHP_EOL.PHP_EOL;
//<--