<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Simulação de login simples (usuário: admin / senha: 1234)
if ($usuario === 'admin' && $senha === '1234') {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?erro=1");
}
