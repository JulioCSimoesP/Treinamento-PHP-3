<?php

//-->Array multidimensional a ser manipulado
$notas = [
    [
        'nome' => 'João',
        'nota' => '5'
    ],
    [
        'nome' => 'Maria',
        'nota' => '10'
    ],
    [
        'nome' => 'Vinícius',
        'nota' => '7'
    ],
    [
        'nome' => 'Carla',
        'nota' => '7'
    ],
    [
        'nome' => 'Neto',
        'nota' => '3'
    ],
    [
        'nome' => 'Jéssica',
        'nota' => '5'
    ],
    [
        'nome' => 'Lúcia',
        'nota' => '8'
    ],
    [
        'nome' => 'Rafael',
        'nota' => '9'
    ],
    [
        'nome' => 'Guilherme',
        'nota' => '1'
    ],
    [
        'nome' => 'Sandra',
        'nota' => '0'
    ],
    [
        'nome' => 'Pedro',
        'nota' => '8'
    ],
    [
        'nome' => 'Paula',
        'nota' => '9'
    ],
    [
        'nome' => 'Aurélio',
        'nota' => '10'
    ],
    [
        'nome' => 'Jorge',
        'nota' => '7'
    ],
    [
        'nome' => 'Ingride',
        'nota' => '6'
    ],
    [
        'nome' => 'Sofia',
        'nota' => '0'
    ],
    [
        'nome' => 'Ana',
        'nota' => '2'
    ],
    [
        'nome' => 'Davi',
        'nota' => '8'
    ],
    [
        'nome' => 'Henrique',
        'nota' => '0'
    ],
    [
        'nome' => 'Bruno',
        'nota' => '5'
    ],
];
//<--

//-->Função de ordenação decrescente e alfabética
function ordenaNotas(array $valor1, array $valor2): int
{
    if($valor1['nota'] > $valor2['nota']) {
        return -1;
    } elseif($valor1['nota'] < $valor2['nota']) {
        return 1;
    } elseif($valor1['nome'] < $valor2['nome']) {
        return -1;
    } elseif($valor1['nome'] > $valor2['nome']) {
        return 1;
    }

    return 0;
}
//<--

//-->Função de ordenação simplificada, crescente e alfabética
function ordenaNotas2(array $array1, array $array2): int
{
    $resultado = $array1['nota'] <=> $array2['nota'];
    if($resultado == 0) {
        return $array1['nome'] <=> $array2['nome'];
    }

    return $array1['nota'] <=> $array2['nota'];
}
//<--

//-->Exibição do array multidimensional desordenado
echo 'Array multidimensional desordenado: '.PHP_EOL;
foreach($notas as $aluno) {
    echo 'Nome: '.$aluno['nome'].PHP_EOL.
         'Nota: '.$aluno['nota'].PHP_EOL.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Exibição do array multidimensional em ordem decrescente
usort($notas,'ordenaNotas');

echo 'Array multidimensional em ordem decrescente: '.PHP_EOL;
foreach($notas as $aluno) {
    echo 'Nome: '.$aluno['nome'].PHP_EOL.
         'Nota: '.$aluno['nota'].PHP_EOL.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Exibição do array multidimensional em ordem crescente
usort($notas,'ordenaNotas2');

echo 'Array multidimensional em ordem crescente: '.PHP_EOL;
foreach($notas as $aluno) {
    echo 'Nome: '.$aluno['nome'].PHP_EOL.
        'Nota: '.$aluno['nota'].PHP_EOL.PHP_EOL;
}
echo PHP_EOL;
//<--