<?php 

/* 
    O primeiro desafio será executar um programa que exiba, na tela do usuário, 
    todos os números ímpares de 0 à 100. 
    Uma dica: para saber se um número é ímpar ou não no PHP, podemos utilizar 
    o operador de resto de divisão por 2 - se esse resto for igual a 0, o número é par; 
    caso contrário, ele é ímpar.
*/


for ($i = 1 ; $i <= 100 ; $i++ ){
    if ($i % 2 != 0){
        echo "#$i" . PHP_EOL ;
    } 
}
