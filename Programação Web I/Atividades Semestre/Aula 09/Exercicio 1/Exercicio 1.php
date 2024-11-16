<?php
$media = $statusNota = $frequencia = $statusFrequencia = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantidadeNotas = intval($_POST['quantidade_notas']);
    $notas = array_map('floatval', explode(',', $_POST['notas']));
    $quantidadeAulas = intval($_POST['quantidade_aulas']);
    $quantidadeFaltas = intval($_POST['quantidade_faltas']);

    function calcularMedia($notas) {
        return count($notas) > 0 ? array_sum($notas) / count($notas) : 0;
    }

    function verificarAprovacaoPorNota($media) {
        return $media >= 7 ? "Aprovado" : "Reprovado";
    }

    function calcularFrequencia($faltas, $aulas) {
        return (($aulas - $faltas) / $aulas) * 100;
    }

    function verificarAprovacaoPorFrequencia($frequencia) {
        return $frequencia > 70 ? "Aprovado" : "Reprovado";
    }

    $media = calcularMedia($notas);
    $statusNota = verificarAprovacaoPorNota($media);
    $frequencia = calcularFrequencia($quantidadeFaltas, $quantidadeAulas);
    $statusFrequencia = verificarAprovacaoPorFrequencia($frequencia);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Acadêmicos</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultados Acadêmicos</h1>
        <form method="POST">
            <label for="quantidade_notas">Quantidade de notas:</label>
            <input type="number" id="quantidade_notas" name="quantidade_notas" required placeholder="Ex: 5" min="1">

            <label for="notas">Notas (separadas por vírgula):</label>
            <input type="text" id="notas" name="notas" required placeholder="Ex: 8,7.5,6,9,10">

            <label for="quantidade_aulas">Quantidade de aulas:</label>
            <input type="number" id="quantidade_aulas" name="quantidade_aulas" required placeholder="Ex: 20" min="1">

            <label for="quantidade_faltas">Quantidade de faltas:</label>
            <input type="number" id="quantidade_faltas" name="quantidade_faltas" required placeholder="Ex: 3" min="0">

            <input type="submit" value="Calcular">
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="result">
                <p><strong>Média das notas:</strong> <span class="highlight"><?= number_format($media, 2); ?></span></p>
                <p><strong>Status de aprovação por nota:</strong> <span class="<?= $statusNota === 'Aprovado' ? 'success' : 'error'; ?>"><?= $statusNota; ?></span></p>
                <p><strong>Frequência:</strong> <span class="highlight"><?= number_format($frequencia, 2); ?>%</span></p>
                <p><strong>Status de aprovação por frequência:</strong> <span class="<?= $statusFrequencia === 'Aprovado' ? 'success' : 'error'; ?>"><?= $statusFrequencia; ?></span></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
