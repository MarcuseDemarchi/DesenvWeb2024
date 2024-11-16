<?php
$salarioOne = 1000;
$salarioTwo = 2000;

for ($i = 1; $i <= 100; $i++) {
    $salarioOne += 1;

    if ($i == 50) {
        break;
    }
}

$mensagem = $salarioOne < $salarioTwo
    ? "O valor de Salário 1 é menor do que Salário 2 após o loop."
    : "O valor de Salário 1 não é menor do que Salário 2 após o loop.";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de Repetição</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado do Laço de Repetição</h1>
        <p class="salario">Valor de Salário 1 após o loop: <span class="highlight">R$<?= number_format($salarioOne, 2, ',', '.'); ?></span></p>
        <p class="salario">Valor de Salário 2: <span class="highlight">R$<?= number_format($salarioTwo, 2, ',', '.'); ?></span></p>
        <div class="result">
            <?= $mensagem; ?>
        </div>
    </div>
</body>
</html>
