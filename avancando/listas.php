<?php 

$idadeList = [21, 19, 20, 22, 30, 25];

//Função list
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList ;

//Função unset
unset($idadeList[4]);

// $idadeList[count($idadeList)] = 20;
$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

/*
$primeiraIdade = $idadeList[0];

echo $primeiraIdade;
*/

