<?php

/* 
    Experimente a declaração de um array associativo que mapea a placa do carro 
    (tipo string, por exemplo LMS-2312) para um carro. O carro também é um array 
    associativo que possui uma marca (por exemplo 'marca' => 'VW') e o modelo 
    (por exemplo 'modelo' => 'Golf').
*/ 

$placaCarro = [
    'Placa' => 'LMS-2312',
    'Marca' => 'VM',
    'Modelo' => 'Golf'
];

foreach ($placaCarro as $item => $status){
    echo $item . " = " . $status . PHP_EOL;
}