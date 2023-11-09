<?php
session_start();

$usuarios = array(
    'gael' => 'gael'
);

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $password) {
    $_SESSION['usuario'] = $usuario;
    echo "Acceso permitido";
} else {

    echo "Acceso denegado";
}
?>