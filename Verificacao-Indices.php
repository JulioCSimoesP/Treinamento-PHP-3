<?php

//-->Elementos a serem manipulados
$busca1 = 'Amanda';
$busca2 = 'Júlio';
$busca3 = 'Jorge';
$array = [
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
    'Rafael' => 7,
    'Júlio' => null
];
//<--

//-->Utilização da função array_key_exists()/key_exists()
echo '['.PHP_EOL;
foreach ($array as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL;

if(array_key_exists($busca1, $array)) {
    echo 'O índice "'.$busca1.'" existe no array'.PHP_EOL;
} else {
    echo 'O índice "'.$busca1.'" não existe no array'.PHP_EOL;
}

if(key_exists($busca2, $array)) {
    echo 'O índice "'.$busca2.'" existe no array'.PHP_EOL;
} else {
    echo 'O índice "'.$busca2.'" não existe no array'.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Utilização da função isset()
if(isset($array[$busca1])) {
    echo 'O índice "'.$busca1.'" existe no array e seu valor é diferente de null'.PHP_EOL;
} else {
    echo 'O índice "'.$busca1.'" não existe no array ou seu valor é igual a null'.PHP_EOL;
}

if(isset($array[$busca2])) {
    echo 'O índice "'.$busca2.'" existe no array e seu valor é diferente de null'.PHP_EOL;
} else {
    echo 'O índice "'.$busca2.'" não existe no array ou seu valor é igual a null'.PHP_EOL;
}

if(isset($array[$busca3])) {
    echo 'O índice "'.$busca3.'" existe no array e seu valor é diferente de null'.PHP_EOL;
} else {
    echo 'O índice "'.$busca3.'" não existe no array ou seu valor é igual a null'.PHP_EOL;
}
//<--