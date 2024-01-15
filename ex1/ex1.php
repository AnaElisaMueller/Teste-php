<?php

echo "Comparação de dois números \n";
$a = readline("Digite um número: ");
$b = readline("Digite um número: ");
if (($a <=> $b)===1){
echo "São diferentes. O valor $a é maior que $b. \n";
} else if (($a <=> $b)=== 0){
    echo "São iguais. O valor $a é igual a $b. \n";
} else {
    echo "São diferentes. O valor $a é menor que $b. \n";
}