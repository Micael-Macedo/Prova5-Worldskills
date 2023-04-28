<?php

session_start();
$_SESSION['logged'] = $_SESSION['logged'] ?? false;

$usuario_db = 'Micael';
$senha_db = '1234';

$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if($p_usuario == $usuario_db and $p_senha == $senha_db){
    $_SESSION['usuario'] = $p_usuario;
    $_SESSION['senha'] = $p_senha;
    $_SESSION['logged'] = true;
}
