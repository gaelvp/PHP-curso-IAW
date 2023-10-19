<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Gael</title>
</head>

<body>
    <h1 style="text-align: center; color: red;"><u>Inicio</u></h1>

    <!-- CONDICIONALES-->
    <h2 style="font-family: fantasy; border: 1px solid black; width: fit-content;">Condicional contraseña</h2>
    <?php
    $password = 'gael';

    //sintaxis de comparacion <=, <, >, >=, ==
    if ($password == 'gael') {
        echo '<h3 style="color:green">CONTRASEÑA CORRECTA --> <a href="resultado-login.php">Siguiente página</a></h3>';
    } else {
        echo '<h3 style="color:red">CONTRASEÑA INCORRECTA</h3>';
    }
    ?>
</body>
</html>