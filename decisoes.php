<?php 

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos" ;
echo "Ou apartir de 16 anos acompanhado." . PHP_EOL;

// and e && 
// or e || 
// == para comparar valores

if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, Está  acompanhado(a). Pode entrar!" ;
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
    echo PHP_EOL . "É uma pena!";
}


echo PHP_EOL;
echo "Adeus!" ;