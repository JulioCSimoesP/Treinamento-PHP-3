<?php

//-->Arrays a serem manipulados
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

$nomesAInserir1 = [
    'Carla',
    'Patrícia'
];

$nomesAInserir2 = [
    'Olga',
    'Letícia'
];
//<--

//-->Utilização da função array_push()
echo '['.PHP_EOL;
foreach ($nomes as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'É possível utilizar a função array_push() para inserir vários elementos ao final de um array. Exemplo: '.PHP_EOL;
$retorno = array_push($nomes, 'Samanta', 'Sérgio', ...$nomesAInserir1);
var_dump($nomes);

echo 'Como retorno, o array_push() devolve a quantidade total de elementos do array após a inserção. No caso anterior foi '.$retorno.PHP_EOL.PHP_EOL;
//<--

//-->Utilização da função array_unshift()
echo 'Também é possível inserir vários elementos no início de um array com a função array_unshift(). Exemplo: '.PHP_EOL;
$retorno = array_unshift($nomes, 'Bob', 'John', ...$nomesAInserir2);
var_dump($nomes);

echo 'Como retorno, o array_unshift() também devolve a quantidade total de elementos do array após a inserção. No caso anterior foi '.$retorno.PHP_EOL.PHP_EOL;
//<--

//-->Utilização da função array_shift()
echo 'Com o array_shift, é possível remover o primeiro elemento de um array. Exemplo: '.PHP_EOL;
$retorno = array_shift($nomes);
var_dump($nomes);

echo 'Como retorno, o array_shift() devolve o valor do elemento que foi removido. No caso anterior foi ';
var_dump($retorno);
echo PHP_EOL.PHP_EOL;
//<--

//-->Utilização da função array_pop()
echo 'Com o array_pop, é possível remover o último elemento de um array. Exemplo: '.PHP_EOL;
$retorno = array_pop($nomes);
var_dump($nomes);

echo 'Como retorno, o array_pop() devolve o valor do elemento que foi removido. No caso anterior foi ';
var_dump($retorno);
echo PHP_EOL.PHP_EOL;
//<--