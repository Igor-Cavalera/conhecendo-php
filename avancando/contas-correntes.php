<?php 

$conta1 = [ 
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Joao',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Rodrigues',
    'saldo' => 300
];

$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i++){
    echo $contaCorrentes[$i]['titular'] . PHP_EOL;
}