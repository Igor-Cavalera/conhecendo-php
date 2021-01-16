<?php

// Função - executa o que ela precisa executar e RETORNA UM VALOR
function sacar(array $conta, float $valorASacar):array 
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor") ;
    } else {
        $conta['saldo'] -= $valorASacar ; 
    }
    return $conta;
}

// SubRotina - executa o que ela precisa executar e não devolve  valor nenhum 
function exibeMensagem($mensagem) 
{
    echo $mensagem . '<br>';
}

// Função Depositar
function depositar(array $conta, float $valorADepositar)
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar ;
    } else {
        exibeMensagem("Você precisam ser positivos");
    }
    return $conta;
}

// Função Colocar letras em MAIUSCULAS
function titularComLetrasMaiusculas(array &$conta)
{
    //strtoupper 
    // $conta['titular'] = strtoupper($conta['titular']);
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    //list...
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    //echo "<li>Titular: $conta[titular] . Saldo: {$conta['saldo']}</li>";
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}