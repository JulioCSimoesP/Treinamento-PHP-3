<?php

//-->Arrays a serem manipulados
$numeros = [
    2,
    10,
    3,
    5,
    8,
    6,
    9,
    1,
    0,
    4,
    7
];

$nomes = [
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

$notas = [
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
//<--

//-->Utilização da função rsort() em um array numérico
rsort($numeros);

echo 'Array de números em ordem inversa: '.PHP_EOL;
foreach($numeros as $valor) {
    echo $valor.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Utilização da função rsort() em um array de strings
rsort($nomes);

echo 'Array de strings em ordem inversa: '.PHP_EOL;
foreach($nomes as $valor) {
    echo $valor.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Eliminação de índices customizados de um array por meio do sort()/rsort()
$copiaArray = $notas;
sort($copiaArray);

echo 'Array associativo com índices resetados: '.PHP_EOL;
foreach($copiaArray as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Ordenação sem perda de índices customizados
$copiaArray = $notas;
asort($copiaArray);

echo 'Array associativo ordenado sem reset de índices: '.PHP_EOL;
foreach($copiaArray as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo PHP_EOL;

arsort($copiaArray);

echo 'Array associativo inversamente ordenado sem reset de índices: '.PHP_EOL;
foreach($copiaArray as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Ordenação de índices
ksort($notas);

echo 'Array ordenado pelo índice: '.PHP_EOL;
foreach($notas as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo PHP_EOL;

krsort($notas);

echo 'Array ordenado pelo índice invertido: '.PHP_EOL;
foreach($notas as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo PHP_EOL;

function ordenaIndice(string $valor1, string $valor2): int
{
    return $valor1 <=> $valor2;
}
uksort($notas, 'ordenaIndice');

echo 'Array com ordenação customizada pelo índice: '.PHP_EOL;
foreach($notas as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo PHP_EOL;
//<--