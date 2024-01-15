<?php

// estruturas condicionais

$b= 1;
while($b != 0){
   $a = <<< "ABC"
     Digite a operação desejado: \n
    1 - comparação de número; \n
    2 - comparação de string; \n
    0 - sair. \n
    \n
    ABC;

    echo $a;
    $b = readline(" ");

    if ($b >2 || $b <0){
        echo "Digito errado \n";}

        switch($b){
            case 1:
                break;

            case 2:
                break;

            case 0:
                break;
    }

}
// falta colocar a comparação ainda