<?php
$salarioOne = null;
$salarioTwo = null;
$mensagem = "";
$classeResultado = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $salarioOne = floatval($_POST['salario1']);
    $salarioTwo = floatval($_POST['salario2']);

    function calcAumento($salario)
    {
        return $salario + ($salario * 0.10);
    }

    $salarioOneAtualizado = calcAumento($salarioOne);

    if ($salarioOneAtualizado > $salarioTwo) {
        $mensagem = "O valor da variável 1 é maior que o valor da variável 2";
        $classeResultado = "maior";
    } elseif ($salarioOneAtualizado < $salarioTwo) {
        $mensagem = "O valor da variável 1 é menor que o valor da variável 2";
        $classeResultado = "menor";
    } else {
        $mensagem = "Os valores são iguais";
        $classeResultado = "igual";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de Salários</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <div class="container">
        <h1>Comparação de Salários</h1>
        <form method="POST">
            <label for="salario1">Salário 1:</label>
            <input type="number" id="salario1" name="salario1" step="0.01" required placeholder="Digite o Salário 1">
            
            <label for="salario2">Salário 2:</label>
            <input type="number" id="salario2" name="salario2" step="0.01" required placeholder="Digite o Salário 2">
            
            <input type="submit" value="Comparar">
        </form>
        
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <p class="salario">
                Salário 1 (com aumento de 10%): <span class="highlight">R$<?= number_format($salarioOneAtualizado, 2, ',', '.'); ?></span>
            </p>
            <p class="salario">
                Salário 2: <span class="highlight">R$<?= number_format($salarioTwo, 2, ',', '.'); ?></span>
            </p>
            <div class="result <?= $classeResultado; ?>">
                <?= $mensagem; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
