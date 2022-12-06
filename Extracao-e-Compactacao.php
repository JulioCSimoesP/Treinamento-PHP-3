<?php

//-->Array a ser manipulado
$array = [
    'nome' => 'João',
    'idade' => 20,
    'profissao' => 'eletricista'
];
//<--

//-->Utilização da função extract()
echo '['.PHP_EOL;
foreach ($array as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'A função extract() é utilizada para criar diversas variáveis baseadas nos índices e valores de um array. Exemplo: '.PHP_EOL;
extract($array);
var_dump($nome, $idade, $profissao);
echo PHP_EOL;
//<--

//-->Utilização da função compact()
echo 'A função compact() é utilizada para criar uma array com índices e valores baseados em diversas variáveis'.PHP_EOL;
$array2 = compact('nome', 'idade', 'profissao');
var_dump($array2);
//<--