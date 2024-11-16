<?php
// Declarar duas variáveis com os nomes: SALARIO1 e
// SALARIO2;
// Atribuir 1000 para a variável SALARIO1;
// Atribuir 2000 para a variável SALARIO2;
// Atribuir o valor da variável SALARIO1 para SALARIO2
// Incrementar 1 na variável SALARIO2;
// Adicionar 10% de aumento para SALARIO1;
// Produzir uma saída com o texto: “Valor Salário 1: XX e Valor
// Salário: XX”;

$salarioOne = 1000;
$salarioTwo = 2000;
$salarioOne = $salarioTwo;
$salarioTwo += 1;

Function calcAumento($salarioOne)
{
    return $salarioOne = $salarioOne + ($salarioOne * 0.10);
};

echo "Valor salario 1 = ".calcAumento($salarioOne).". Valor salario 2 = $salarioTwo";