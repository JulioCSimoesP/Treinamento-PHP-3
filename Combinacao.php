<?php

//-->Arrays a serem manipulados
$array = [
    'João' => 'banana',
    'Maria' => 'Maçã',
    'Amanda' => 'Laranja',
    'Pedro' => 'Cereja',
    'Felipe' => 'Uva',
    'Sandra' => 'Açaí',
    'Bruno' => 'Pêra',
    'Jéssica' => 'Kiwi',
    'Célia' => 'Acerola',
    'Guilherme' => 'Côco',
    'Rafael' => 'Amora'
];
//<--

//-->Utilização da função array_keys()
echo '['.PHP_EOL;
foreach ($array as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

$resultado1 = array_keys($array);

echo 'Caso o array_keys() não receba nenhum parâmetro de busca, ele simplesmente devolve um array com todos os índices do array passado. Exemplo: '.PHP_EOL;
var_dump($resultado1);
echo PHP_EOL;
//<--

//-->Utilização da função array_values()
$resultado2 = array_values($array);

echo 'Apenas relembrando, o array_values() pode ser utilizado para criar um novo array com todos os valores do array passado. Exemplo: '.PHP_EOL;
var_dump($resultado2);
echo PHP_EOL;
//<--

//-->Utilização da função array_combine()
echo 'Utilizando dois arrays do mesmo tamanho, é possível criar um novo array cujos índices equivalem aos valores do primeiro array e cujos valores equivalem aos do segundo array. Exemplo: '.PHP_EOL;
$resultado3 = array_combine($resultado2, $resultado1);
var_dump($resultado3);
echo PHP_EOL;
//<--

//-->Utilização da função array_flip()
echo 'É possível inverter os índices e os valores de um array com a função array_flip(). Exemplo: '.PHP_EOL;
$resultado4 = array_flip($array);
var_dump($resultado4);
echo PHP_EOL;
//<--