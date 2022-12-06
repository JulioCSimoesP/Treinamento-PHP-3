<?php

//-->Arrays a serem manipulados
$frutas1 = [
    'Banana',
    'Uva',
    'Maçã',
    'Morango',
    'Abacaxi',
    'Cereja',
    'Amora',
    'Acerola',
    'Carambola'
];

$frutas2 = [
    'Banana',
    'Uva',
    'Maçã',
    'Abacaxi',
    'Cereja',
    'Acerola',
    'Carambola',
    'Açaí'
];

$frutas3 = [
    'Banana',
    'Maçã',
    'Abacaxi',
    'Cereja',
    'Acerola',
    'Carambola',
];

$notasBimestre1 = [
    'João' => 2,
    'Maria' => 10,
    'Amanda' => 3,
    'Pedro' => 5,
    'Felipe' => 8,
    'Sandra' => 6,
    'Bruno' => 9,
    'Jéssica' => 1,
    'Célia' => 0,
    'Guilherme' => 4
];

$notasBimestre2 = [
    'João' => 2,
    'Amanda' => 3,
    'Felipe' => 1,
    'Sandra' => 6,
    'Bruno' => 7,
    'Célia' => 9,
    'Guilherme' => 5,
    'Rafael' => 7
];

$notasBimestre3 = [
    'Amanda' => 9,
    'Felipe' => 8,
    'Sandra' => 3,
    'Bruno' => 5,
    'Jéssica' => 1,
    'Célia' => 10,
    'Guilherme' => 4,
    'Rafael' => 7
];

$cores1 = [
    'branco',
    'azul',
    'verde',
    'vermelho',
    'preto',
    'amarelo',
    'roxo'
];

$cores2 = [
    'branco',
    'verde',
    'azul',
    'preto',
    'vermelho',
    'amarelo',
    'violeta'
];

$cores3 = [
    'verde',
    'azul',
    'vermelho',
    'preto',
    'amarelo',
    'branco'
];
//<--

//-->Utilização da função array_diff()
echo 'Array 1 = ['.PHP_EOL;
foreach ($frutas1 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Array 2 = ['.PHP_EOL;
foreach ($frutas2 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Array 3 = ['.PHP_EOL;
foreach ($frutas3 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

$resultado = array_diff($frutas1, $frutas2);
echo 'Utilizando o array 1 como referência e o array 2 como base de busca, é possível identificar que os elementos "';
foreach($resultado as $valor) {
    echo $valor.' ';
}
echo '" existem no array 1 mas não no array 2'.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff($frutas1, $frutas2, $frutas3);
echo 'Utilizando o array 1 como referência e os arrays 2 e 3 como base de busca, é possível identificar que os elementos "';
foreach($resultado as $valor) {
    echo $valor.' ';
}
echo '" existem no array 1 mas não nos arrays 2 e 3'.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff($frutas2, $frutas1);
echo 'Utilizando o array 2 como referência e o array 1 como base de busca, é possível identificar que os elementos "';
foreach($resultado as $valor) {
    echo $valor.' ';
}
echo '" existem no array 2 mas não no array 1'.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff($frutas1, $frutas3);
echo 'Utilizando o array 1 como referência e o array 3 como base de busca, é possível identificar que os elementos "';
foreach($resultado as $valor) {
    echo $valor.' ';
}
echo '" existem no array 1 mas não no array 3'.PHP_EOL.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);
//<--

//-->Utilização da função array_diff_key()
echo 'Alunos e notas do bimestre 1 = ['.PHP_EOL;
foreach ($notasBimestre1 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Alunos e notas do bimestre 2 = ['.PHP_EOL;
foreach ($notasBimestre2 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Alunos e notas do bimestre 3 = ['.PHP_EOL;
foreach ($notasBimestre3 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

$resultado = array_diff_key($notasBimestre1, $notasBimestre2);
echo 'Utilizando o bimestre 1 como referência e o bimestre 2 como base de busca, é possível identificar que os índices "';
foreach($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" foram registrados no bimestre 1 mas não no bimestre 2'.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff_key($notasBimestre1, $notasBimestre2, $notasBimestre3);
echo 'Utilizando o bimestre 1 como referência e os bimestres 2 e 3 como base de busca, é possível identificar que os índices "';
foreach($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" foram registrados no bimestre 1 mas não nos bimestres 2 e 3'.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff_key($notasBimestre2, $notasBimestre1);
echo 'Utilizando o bimestre 2 como referência e o bimestres 1 como base de busca, é possível identificar que os índices "';
foreach($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" foram registrados no bimestre 2 mas não nos bimestres 1'.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff_key($notasBimestre1, $notasBimestre3);
echo 'Utilizando o bimestre 1 como referência e o bimestre 3 como base de busca, é possível identificar que os índices "';
foreach($resultado as $indice => $valor) {
    echo $indice.' ';
}
echo '" foram registrados no bimestre 1 mas não no bimestre 3'.PHP_EOL.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);
//<--

//-->Utilização da função array_diff_assoc()
echo 'Lista de cores 1 = ['.PHP_EOL;
foreach ($cores1 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Lista de cores 2 = ['.PHP_EOL;
foreach ($cores2 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

echo 'Lista de cores 3 = ['.PHP_EOL;
foreach ($cores3 as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

$resultado = array_diff_assoc($cores1, $cores2);
echo 'Utilizando a lista de cores 1 como referência e a lista de cores 2 como base de busca, é possível identificar que as combinações de índice e valor "'.PHP_EOL;
foreach($resultado as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo '" da lista 1 não existem na lista 2'.PHP_EOL.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff_assoc($cores1, $cores2, $cores3);
echo 'Utilizando a lista de cores 1 como referência e as listas de cores 2 e 3 como base de busca, é possível identificar que as combinações de índice e valor "'.PHP_EOL;
foreach($resultado as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo '" da lista 1 não existem nas listas 2 e 3'.PHP_EOL.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff_assoc($cores2, $cores1);
echo 'Utilizando a lista de cores 2 como referência e a lista de cores 1 como base de busca, é possível identificar que as combinações de índice e valor "'.PHP_EOL;
foreach($resultado as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo '" da lista 2 não existem na lista 1'.PHP_EOL.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);

//=====

$resultado = array_diff_assoc($cores1, $cores3);
echo 'Utilizando a lista de cores 1 como referência e a lista de cores 3 como base de busca, é possível identificar que as combinações de índice e valor "'.PHP_EOL;
foreach($resultado as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo '" da lista 1 não existem na lista 3'.PHP_EOL.PHP_EOL;
echo 'Array de resultado: '.PHP_EOL;
var_dump($resultado);
//<--

