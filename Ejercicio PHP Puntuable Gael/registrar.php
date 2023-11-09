<?php
session_start();


$usuarios = array(
    'gael' => 'gael',
);


$usuarioNuevo = $_POST['usuario'];
$passwordNuevo = $_POST['password'];


if (array_key_exists($usuarioNuevo, $usuarios)) {

    echo "Usuario existente";
} else {
    
    $usuarios[$usuarioNuevo] = $passwordNuevo;
    echo "Usuario creado";
    print_r($usuarios);
}
?>