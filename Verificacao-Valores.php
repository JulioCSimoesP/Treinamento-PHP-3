<?php

//-->Array a ser manipulado
$busca1 = 5;
$busca2 = 15;
$busca3 = '7';
$busca4 = 10;
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
    'Jùlio' => 10,
    'Jorge' => 0,
    'Karen' => 7
];
//<--

//-->Utilização da função in_array()
echo '['.PHP_EOL;
foreach ($array as $indice => $valor) {
    echo $indice.' => '.$valor.PHP_EOL;
}
echo ']'.PHP_EOL.PHP_EOL;

if(in_array($busca1, $array)) {
    echo 'Algúem tirou nota '.$busca1.PHP_EOL;
} else {
    echo 'Ninguém tirou nota '.$busca1.PHP_EOL;
}

//=====

if(in_array($busca2, $array)) {
    echo 'Algúem tirou nota '.$busca2.PHP_EOL;
} else {
    echo 'Ninguém tirou nota '.$busca2.PHP_EOL;
}

//=====

if(in_array($busca3, $array)) {
    echo 'Algúem tirou nota '.$busca3.PHP_EOL;
} else {
    echo 'Ninguém tirou nota '.$busca3.PHP_EOL;
}
echo PHP_EOL;

//=====

if(in_array($busca1, $array, true)) {
    echo 'Com o parâmetro "strict" da função in_array() definido como "true", o php encontrou o valor '.$busca1.', pois o valor buscado é do mesmo tipo do valor armazenado no array'.PHP_EOL;
} else {
    echo 'Com o parâmetro "strict" da função in_array() definido como "true", o php não encontrou o valor '.$busca1.', pois o valor buscado é de um tipo diferente do valor armazenado no array'.PHP_EOL;
}
//=====

if(in_array($busca3, $array, true)) {
    echo 'Com o parâmetro "strict" da função in_array() definido como "true", o php encontrou o valor '.$busca3.', pois o valor buscado é do mesmo tipo do valor armazenado no array'.PHP_EOL;
} else {
    echo 'Com o parâmetro "strict" da função in_array() definido como "true", o php não encontrou o valor '.$busca3.', pois o valor buscado é de um tipo diferente do valor armazenado no array'.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Utilização da função array_search()
if(in_array($busca1, $array)) {
    echo 'Pelo menos uma pessoa tirou nota '.$busca1.' e a primeira pessoa encontrada com essa nota foi '.array_search($busca1, $array).PHP_EOL;
} else {
    echo 'Ninguém tirou nota '.$busca2.PHP_EOL;
}

//=====

if(in_array($busca3, $array)) {
    echo 'Pelo menos uma pessoa tirou nota '.$busca3.' e a primeira pessoa encontrada com essa nota foi '.array_search($busca3, $array).PHP_EOL;
} else {
    echo 'Ninguém tirou nota '.$busca3.PHP_EOL;
}

//=====

if(!array_search($busca2, $array)) {
    echo 'Caso o array_search não encontre nenhum índice com o valor buscado, ele retorna o valor ';
    var_dump(array_search($busca2, $array));
}
echo PHP_EOL;

//=====

if(in_array($busca1, $array, true)) {
    echo 'Com o parâmetro "strict" da função array_search() definido como "true", o primeiro índice que o php encontrou com o valor '.$busca1.' foi o índice '.array_search($busca1, $array, true).PHP_EOL;
} else {
    echo 'Com o parâmetro "strict" da função array_search() definido como "true", o php não encontrou nenhum índice com o valor '.$busca1.PHP_EOL;
}

//=====

if(!array_search($busca3, $array, true)) {
    echo 'Com o parâmetro "strict" da função array_search() definido como "true", o php não encontrou nenhum índice com o valor '.$busca3.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Utilização da função array_keys()
$retornoBusca = array_keys($array, $busca4);
echo 'Com a função array_keys(), é possível verificar que os índices que possuem o valor '.$busca4.' são: ';
foreach ($retornoBusca as $valor) {
    echo $valor.' ';
}
echo PHP_EOL;
var_dump($retornoBusca);
//=====

$retornoBusca = array_keys($array, $busca2);

echo 'Se nenhum índice for encontrado, a função array_keys() retorna um array vazio, como em: '.PHP_EOL;
var_dump($retornoBusca);

//=====
$retornoBusca = array_keys($array, $busca3, true);
echo 'Da mesma forma que as outras funções, o array_keys() pode validar o tipo do elemento buscado com o parâmetro "strict", como em: '.PHP_EOL;
var_dump($retornoBusca);
//<--