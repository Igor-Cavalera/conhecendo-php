<?php 

/* 
    A ideia agora é exibir a tabuada de determinado número. Ou seja, temos 
    um número armazenado em uma variável qualquer, e queremos exibir o resultado 
    da sua multiplicação de 1 até 9. Se tiver dúvidas, consulte o fórum da Alura. 
    Até a solução!

*/

for ($i = 1; $i <=10; $i++){
    $multiplicador = 6;
    $conta = "$multiplicador x $i = " ;  
    echo "$conta" . $i * $multiplicador . PHP_EOL;
}