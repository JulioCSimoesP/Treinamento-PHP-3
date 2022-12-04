<?php

//-->Elementos a serem utilizados
$variavel = 0;
$arrayAssociativo = [
    'João' => 2,
    'Maria' =>10,
    'Amanda' => 3,
    'Pedro' => 5,
    'Felipe' => 8,
    'Sandra' => 6,
    'Bruno' => 9,
    'Jéssica' => 1,
    'Célia' => 0,
    'Guilherme' => 4,
    'Rafael' => 7
];
$arrayLista = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
];
$arrayDescontinuo = [
    0 => 'Água',
    1 => 'Terra',
    3 => 'Fogo',
    4 => 'Ar'
];
//<--

//-->Utilização da função is_array()
echo '['.PHP_EOL;
foreach ($arrayAssociativo as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL;

if(is_array($arrayAssociativo)) {
    echo 'O elemento anterior é um array'.PHP_EOL.PHP_EOL;
} else {
    echo 'O elemento anterior não é um array'.PHP_EOL.PHP_EOL;
}

//=====

echo $variavel.' = '.gettype($variavel).PHP_EOL;

if(is_array($variavel)) {
    echo 'O elemento anterior é um array'.PHP_EOL.PHP_EOL;
} else {
    echo 'O elemento anterior não é um array'.PHP_EOL.PHP_EOL;
}
//<--

//-->Utilização da função array_is_list()
echo '['.PHP_EOL;
foreach ($arrayLista as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL;

if(array_is_list($arrayLista)) {
    echo 'O array anterior é considerado uma lista'.PHP_EOL.PHP_EOL;
} else {
    echo 'O array anterior não é considerado uma lista'.PHP_EOL.PHP_EOL;
}

//=====

echo '['.PHP_EOL;
foreach ($arrayAssociativo as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL;

if(array_is_list($arrayAssociativo)) {
    echo 'O array anterior é considerado uma lista'.PHP_EOL.PHP_EOL;
} else {
    echo 'O array anterior não é considerado uma lista'.PHP_EOL.PHP_EOL;
}

//=====

echo '['.PHP_EOL;
foreach ($arrayDescontinuo as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL;

if(array_is_list($arrayDescontinuo)) {
    echo 'O array anterior é considerado uma lista'.PHP_EOL.PHP_EOL;
} else {
    echo 'O array anterior não é considerado uma lista'.PHP_EOL.PHP_EOL;
}
//<--