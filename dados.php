<?php

$dadosEmString = file_get_contents('dados.json');
$dadosEmArray = json_decode($dadosEmString, true);
var_dump($dadosEmArray);

$numeroDePaises = count($dadosEmArray);
echo "Número de países participantes: $numeroDePaises";

$dadosEmArray = array_map(function ($item) {
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
    return $item;
}, $dadosEmArray);
var_dump($dadosEmArray);

usort($dadosEmArray, function ($item1, $item2) {
    $medalhas1 = $item1['medalhas'];
    $medalhas2 = $item2['medalhas'];

    return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro']
        : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
            ? $medalhas2['prata'] - $medalhas1['prata']
            : $medalhas2['bronze'] - $medalhas1['bronze']);
});
var_dump($dadosEmArray);

$numeroDeMedalhas = array_reduce($dadosEmArray, function ($medalhasAcumuladas, $itemAtual) {
    $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual) {
        return $medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual;
    }, 0);

    return $medalhasAcumuladas + $medalhasDoPais;
}, 0);

echo "Total de medalhas entregues: $numeroDeMedalhas".PHP_EOL;

$paisesComNomeSemEspaco = array_filter($dadosEmArray, function ($item) {
    return strpos($item['pais'], ' ') === false;
});
var_dump($paisesComNomeSemEspaco);