<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

$dataInicio = $_SESSION['data_inicio'];
$dataAtual = date("Y-m-d H:i:s");
$_SESSION['ultima_requisicao'] = $dataAtual;

$tempoSessao = strtotime($dataAtual) - strtotime($dataInicio);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão do Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sessão do Usuário</h1>
        <p><strong>Login:</strong> <span class="highlight"><?= $_SESSION['login']; ?></span></p>
        <p><strong>Senha:</strong> <span class="highlight"><?= $_SESSION['senha']; ?></span></p>
        <p><strong>Data/Hora de Início:</strong> <span class="highlight"><?= $_SESSION['data_inicio']; ?></span></p>
        <p><strong>Data/Hora da Última Requisição:</strong> <span class="highlight"><?= $_SESSION['ultima_requisicao']; ?></span></p>
        <p><strong>Tempo de Sessão:</strong> <span class="highlight"><?= gmdate("H:i:s", $tempoSessao); ?></span></p>

        <form method="POST" action="logout.php">
            <input type="submit" value="Sair">
        </form>
    </div>
</body>
</html>
