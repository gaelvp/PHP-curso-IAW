<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Gael</title>
</head>

<body>
    <h1 style="text-align: center; color: red;"><u>Data</u></h1>

    <!-- CONDICIONALES-->
    <h2 style="font-family: fantasy; border: 1px solid black; width: fit-content;">Condicional Data</h2>
    <?php
    $rol = 'Administrador';
    ?>
    <!--sintaxis de comparacion <=, <,>, >=, == -->

        <?php
        if ($rol == 'Administrador') {
            echo '<h3 style="color:green">ERES ADMINISTRADOR, ESTAS AUTORIZADO PARA MODIFCAR DATOS --> <a href="data.php">Siguiente página</a></h3>';
        } elseif ($rol == 'Usuario') {
            echo '<h3 style="color:blue">ERES USUARIO, MODO SOLO LECTURA</h3>';
        } else {
            echo '<h3 style="color:red">NO ESTAS AUTORIZADO A ACCEDER</h3>';
        }
        ?>
</body>

</html>