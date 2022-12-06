<?php

//-->Formas de instanciar um array
$listaDeFrutas = [];

$listaDeVerduras = array();
//<--

//-->Formas de inicializar um array
$listaDeFrutas = [
    'Maçã',
    'Banana',
    'Uva'
];

$listaDeVerduras = array(
    'Alface',
    'Couve-flor',
    'Salsinha'
);
//<--

//-->Formas de navegar entre todos os elementos de um array
for($i=0 ; $i<count($listaDeFrutas) ; $i++) {
    echo $listaDeFrutas[$i].PHP_EOL;
}
echo PHP_EOL;

foreach ($listaDeVerduras as $indice => $verdura) {
    echo $indice.' = '.$verdura.PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Formas de adicionar elementos em um array
$listaDeFrutas[3] = 'Morango';

$listaDeFrutas[sizeof($listaDeFrutas)] = 'Laranja';

$listaDeVerduras[] = 'Coêntro';

var_dump($listaDeFrutas);
var_dump($listaDeVerduras);
//<--

//-->Arrays associativos
$listaDeLegumes = [
    'primeiro' => 'Batata',
    'segundo' => 'Beterraba',
    'terceiro' => 'Cenoura'
];
print_r($listaDeLegumes);
//<--

//-->Arrays multidimensionais
$listaDeIngredientes = [
    'Proteínas' => [
        'Picanha',
        'Bacon',
        'Salmão'
    ],
    'Carboidratos' => [
        'Arroz',
        'Feijão',
        'Mandioca'
    ],
    'Gorduras' => [
        'Margarina',
        'Requeijão',
        'Óleo de côco'
    ]
];
var_dump($listaDeIngredientes);
//<--

//-->Forma de remover o elemento de um array
unset($listaDeFrutas[2]);
print_r($listaDeFrutas);
//<--

//-->Forma de reindexar os elementos de um array ou copiar os valores de um array
$listaDeFrutas = array_values($listaDeFrutas);
var_export($listaDeFrutas);

$listaDeLegumes = array_values($listaDeLegumes);
var_export($listaDeLegumes);

$copiaDeArray = array_values($listaDeFrutas);
var_export($copiaDeArray);
echo PHP_EOL;
//<--

//--> Interrompendo o script
die('A última mensagem não é exibida.');

/** @noinspection PhpUnreachableStatementInspection */
echo 'Última mensagem.';
//<--