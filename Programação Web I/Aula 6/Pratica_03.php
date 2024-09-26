<?php

    $Salario1 = 1000;
    $Salario2 = 2000;

    $Salario2 = $Salario1 + 1;
    $Salario1 += ($Salario1 * 0.10);

    If ($Salario1 > $Salario2){
        Echo "O Valor da variável 1 é maior que o da valor da variavel 2";
    } elseif ($Salario1 == $Salario2 ){
        Echo "O Valor da variável 2 é maior que o da valor da variavel 1";
    } else {
        Echo "Os valores são iguais";
    }


?>