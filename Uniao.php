<?php

//-->Arrays a serem manipulados
$nomes1 = [
    'João',
    'Maria',
    'Roberto'
];

$nomes2 = [
    'Patrícia',
    'Amanda',
    'Pedro'
];

$signos1 = [
    'João' => 'áries',
    'Maria' => 'aquário',
    'Roberto' => 'libra'
];

$signos2 = [
    'João' => 'gêmeos',
    'Felipe' => 'aquário',
    'Roberto' => 'virgem'
];

$signos3 = [
    'Patícia' => 'câncer',
    'Amanda' => 'escorpião',
    'Pedro' => 'touro'
];
//<--

//-->Utilização da função array_merge()
echo '['.PHP_EOL;
foreach ($nomes1 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo '['.PHP_EOL;
foreach ($nomes2 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

$resultado1 = array_merge($nomes1, $nomes2);

echo 'Com o array_merge() é possível unir dois ou mais arrays. Exemplo: '.PHP_EOL;
var_dump($resultado1);
echo PHP_EOL;

//=====

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

$resultado2 = array_merge($signos1, $signos2);

echo 'Se os índices forem numéricos, o array_merge() simplesmente reindexa todos os valores dos arrays, porém se forem strings, o array_merge() sobrescreve os valores dos índices com nomes iguais, dando prioridade para o último encontrado. Exemplo: '.PHP_EOL;
var_dump($resultado2);
//<--

//-->Utilização do operador de união
$resultado3 = $signos1 + $signos3;

echo 'O operador "+" também pode unir arrays. Exemplo: '.PHP_EOL;
var_dump($resultado3);

//=====

$resultado4 = $signos1 + $signos2;

echo 'Porém diferente do array_merge(), quando existem índices iguais (numéricos ou strings), o operador "+" prioriza manter o valor da primeira aparição do índice. Exemplo: '.PHP_EOL;
var_dump($resultado4);
//<--