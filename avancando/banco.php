<?php

/* Include é quando o arquivo for adicional, mas não for essencial
para o programa

    ** Caso o arquivo a ser incluído não seja encontrado, 
    require para a execução do programa enquanto 
    include permite que continue. **

*/

//include('funcoes.php');
//include 'funcoes.php';

//Require é para quando o arquivo for OBRIGATORIO PARA O programa
//require 'funcoes.php';
//require_once garante que o arquivo será incluído apenas uma vez
require_once 'funcoes.php'; 

$contasCorrentes = [
  '125.461.823-10' => [ 
    'titular' => 'Vinicius',
    'saldo' => 10000
],
   '135.461.023-12' => [
    'titular' => 'Joao',
    'saldo' => 300
], 
   '125.465.023-11' => [
    'titular' => 'Rodrigues',
    'saldo' => 100
]
];

$contasCorrentes['125.461.823-10'] = sacar(
    $contasCorrentes['125.461.823-10'], 500
);

$contasCorrentes['135.461.023-12'] = sacar(
    $contasCorrentes['135.461.023-12'], 200
);

$contasCorrentes['125.465.023-11'] = depositar(
    $contasCorrentes['125.465.023-11'], 900
);

//Função unset
unset($contasCorrentes['125.465.023-11']);

titularComLetrasMaiusculas($contasCorrentes['125.461.823-10']);


//echo "<ul>";
//foreach ($contasCorrentes as $cpf => $conta) {
    //Função List 
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //['titular' => $titular, 'saldo' => $saldo] = $conta;

    //As duas formas são válidas
    //exibeMensagem("$cpf  $conta[titular]  $conta[saldo]");
    //exibeMensagem("$cpf  {$conta['titular']}  {$conta['saldo']}");
    //exibeMensagem("$cpf  $titular  $saldo");
    //exibeConta($conta);
//}
//echo "</ul>";
?>

<!DOCTYPE html>
<!-- ----------------HTML CODE-------------- --> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - testing</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
