<?php 


/* 
    A ideia é, a partir de uma altura e peso definidas, calcularmos o IMC. 
    Para isso, você precisará pesquisar a fórmula na internet (que é bastante simples).

    A partir dessa fórmula e da tabela de IMCs, o código deverá exibir se o usuário 
    está abaixo, dentro ou acima do nível recomendado. 
    
    formula : imc = peso / (altura * altura)

    IMC                 Situação
    <16 ---------------- Subpeso
    16 a 19,9 ---------- Subpeso 
    20 a 24,9 ---------- Normal 
    25 a 29,9 ---------- Sobrepeso 
    30 a 39,9 ---------- Obeso
    >40 ---------------- Obeso Mórbido

    LEMBRETE: TENTAR APRIMORAR ESSE CÓDIGO, PARA ARREDONDAR E TER RESULTADO MAIS PRECISOS.

*/

// Digite seu peso:
    $peso = 40; 
// Digite sua altura: 
    $altura = 1.72;

//Calcula IMC 
    $imc = $peso / ($altura * $altura) ;  
    
//Exibe resultado
    echo "Resultado:" . PHP_EOL ; 

    if ($imc >= 20 && $imc < 24){
        echo "$imc - Seu IMC está normalizado" . PHP_EOL ;
    } else if ($imc < 19.5 ){
        echo "$imc - Seu IMC está abaixo do normal" . PHP_EOL ; 
    } else if ($imc > 24 ) {
        echo "$imc - Seu IMC está acima do normal" . PHP_EOL ;
    }

    echo "Esse foi o resultado do seu IMC" . PHP_EOL; 




