<?php
session_start();

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Usuário e senha fixos
    $usuario_correto = 'admin';
    $senha_correta = '1234';

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        header("Location: exemplo.php");  // Aqui está a mudança para exemplo.php
        exit();
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(41, 69, 77),rgb(15, 61, 58));
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background:rgb(32, 97, 107);
            padding: 25px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 0 15px rgba(2, 12, 15, 0.3);
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #015f7a;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
    button {
            background-color:rgb(41, 114, 122);
            color: 004d40;
            border-radius: 6px;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button {
            background-color:rgb(34, 86, 100);
        }
        .erro {
            color:rgb(18, 94, 101);
            margin-bottom: 15px;
            font-weight: bold;
        }
        h2 {
            margin-bottom: 20px;
            color:rgb(4, 10, 10);
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    <?php if ($erro): ?>
        <div class="erro"><?= htmlspecialchars($erro) ?></div>
    <?php endif; ?>
    <form method="post" action="">
        <input type="text" name="usuario" placeholder="Usuário" required autofocus />
        <input type="password" name="senha" placeholder="Senha" required />
        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>
