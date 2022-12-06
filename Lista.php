<?php

//-->Arrays a serem manipulados
$array1 = [
    'Banana',
    'Maçã',
    'Laranja',
    'Cereja'
];

$array2 = [
    'João' => 'Morango',
    'Maria' => 'Açaí',
    'Amanda' => 'Pêra',
    'Pedro' => 'Amora'
];
//<--

//-->Utilização da função list()
echo 'A função list() permite que os elementos de um array sejam atribuídos a várias variáveis ao mesmo tempo. Exemplo: '.PHP_EOL;
list($fruta1,$fruta2,$fruta3,$fruta4) = $array1;
var_dump($fruta1, $fruta2, $fruta3, $fruta4);
echo PHP_EOL;

echo 'É possível pular determinados elementos apenas não preenchendo nada entre as vírgulas. Exemplo: '.PHP_EOL;
list($fruta1,,$fruta2,$fruta3) = $array1;
var_dump($fruta1, $fruta2, $fruta3);
echo PHP_EOL;

echo 'Além disso, declarar as variáveis entre "[]" tem um efeito similar a função list(). Exemplo: '.PHP_EOL;
[$fruta1,$fruta2,$fruta3,$fruta4] = $array1;
var_dump($fruta1, $fruta2, $fruta3, $fruta4);
echo PHP_EOL;

echo 'Também é possível declarar as variáveis fora de ordem utilizando uma associação explícita. Exemplo: '.PHP_EOL;
[2 => $fruta1, 3 => $fruta2, 1 => $fruta3, 0 => $fruta4] = $array1;
var_dump($fruta1, $fruta2, $fruta3, $fruta4);
echo PHP_EOL;

echo 'Quando se trata de arrays com índices customizados, só é possível utilizar o list() por meio de associação explícita. Exemplo: '.PHP_EOL;
['João' => $fruta1, 'Maria' => $fruta2, 'Amanda' => $fruta3, 'Pedro' => $fruta4] = $array2;
var_dump($fruta1, $fruta2, $fruta3, $fruta4);
echo PHP_EOL;
//<--
