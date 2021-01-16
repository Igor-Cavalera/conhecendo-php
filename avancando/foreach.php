<?php

$contasCorrentes = [
  '125.461.823-10' => [ 
    'titular' => 'Vinicius',
    'saldo' => 1000
],
   '135.461.023-12' => [
    'titular' => 'Joao',
    'saldo' => 10000
], 
   '125.465.023-11' => [
    'titular' => 'Rodrigues',
    'saldo' => 300
]
];

// echo $contasCorrentes[12546182310]['titular'];


$contasCorrentes['456.512.322-15'] = [
    'titular' => 'Claudia' , 
    'saldo' => 1400
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

