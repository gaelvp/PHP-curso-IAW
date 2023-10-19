<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GAEL</title>
</head>

<body>
    <h1
        style="color: blue; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 40px; text-align: center; ">
        Primer uso de PHP</h1>

    <h2>Primer Bloque PHP</h2>
    <?php
    $nombre = 'Gael';
    $edad = 49;

    //echo del contenido de la variable
    echo $nombre;

    //concatenacion de variables con texto
    echo '<h3>Mi nombre es ' . $nombre . '</h3>';
    echo '<br>';
    
    //Para no mostrar el valor de la variable:
    echo '<h3>Mi nombre es . $nombre . </h3>';
        ?>
</body>

</html>