<?php

//-->Arrays a serem manipulados
$signos1 = [
    'João' => 'áries',
    'Maria' => 'aquário',
    'Roberto' => 'libra'
];

$signos2 = [
    'Patícia' => 'câncer',
    'Amanda' => 'escorpião',
    'Pedro' => 'touro'
];

$signos3 = [
    'João' => 'gêmeos',
    'Felipe' => 'aquário',
    'Roberto' => 'virgem'
];

$numeros = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];
//<--

//-->Utilização do operador de unpacking
echo '['.PHP_EOL;
foreach ($signos1 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo '['.PHP_EOL;
foreach ($signos2 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo '['.PHP_EOL;
foreach ($signos3 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Também é possível unir vários arrays utilizando o operador "...". Exemplo: '.PHP_EOL;
$resultado1 = [...$signos1, ...$signos2];
var_dump($resultado1);
echo PHP_EOL;

//=====

echo 'O operador "..." possui um comportamento semelhante ao array_merge(). Exemplo: '.PHP_EOL;
$resultado1 = [...$signos1, ...$signos3];
var_dump($resultado1);
echo PHP_EOL;

//=====

echo 'Mas além disso ele também permite a inserção de elementos individuais durante a formação do novo array. Exemplo: '.PHP_EOL;
$resultado1 = [...$signos1, 'Cleiton' => 'sagitário', ...$signos2];
var_dump($resultado1);
echo PHP_EOL;
//<--

//-->Utilização do operador de spreading
function soma(int ...$numeros): string
{
    $total = 0;
    foreach($numeros as $valor) {
        $total += $valor;
    }

    return 'O total é '.$total;
}

echo 'Quando utilizado na construção de uma função, o operador "..." permite que uma quantidade indefinida ou variável de elementos possam ser passados para a função. Exemplo: '.PHP_EOL;
echo soma(1,2,3,4,5).PHP_EOL;

//=====

echo 'Da mesma forma também é possível passar vários parâmetros para uma função utilizando o operador "...". Exemplo: '.PHP_EOL;
echo soma(...$numeros);
//<--