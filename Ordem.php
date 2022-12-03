<?php

//-->Utilização da função sort() em arrays numéricos
$arrayNumerico = [
    9,
    5,
    0,
    6,
    4,
    1,
    7,
    8,
    3,
    2
];

echo 'Array numérico desordenado: ';
var_dump($arrayNumerico);
echo PHP_EOL;

sort($arrayNumerico);

echo 'Array numérico ordenado: ';
var_dump($arrayNumerico);
echo PHP_EOL;
//<--

//-->Utilização da função sort() em arrays de Strings
$arrayStrings = [
    'Banana',
    'Morango',
    'Uva',
    'Abacaxi',
    'Cereja',
    'Côco',
    'Kiwi',
    'Pêssego',
    'Ameixa',
    'Maçã'
];

echo 'Array de Strings desordenado: ';
var_dump($arrayStrings);
echo PHP_EOL;

sort($arrayStrings);

echo 'Array de Strings ordenado: ';
var_dump($arrayStrings);
echo PHP_EOL;
//<--

//-->Utilização da função sort() sem modificar um array
$arrayOriginal = [
    'João',
    'Maria',
    'Amanda',
    'Pedro',
    'Felipe',
    'Sandra',
    'Bruno',
    'Jéssica',
    'Célia',
    'Guilherme'
];

echo 'Array original desordenado: ';
var_dump($arrayOriginal);
echo PHP_EOL;

$copiaArray = $arrayOriginal;
sort($copiaArray);

echo 'Cópia ordenada: ';
var_dump($copiaArray);
echo PHP_EOL;
//<--