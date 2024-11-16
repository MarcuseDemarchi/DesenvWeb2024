<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['data_inicio'] = date("Y-m-d H:i:s");
    $_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");

    header("Location: session.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required placeholder="Digite seu login">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
