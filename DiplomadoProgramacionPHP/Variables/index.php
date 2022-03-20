<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables en PHP</title>
</head>

<body>

    <h1>Variables en PHP</h1>

    <?php

    # Las variables en PHP soportan un tipado dinámico

    $nombre = "Thomas Camilo";
    $apellidos = "Vanegas ACevedo";
    $edad = 17;
    $estatura = 1.73;
    $estaVivo = true;

    echo $nombre;

    #print("La edad de " + $nombre + " es de " + $edad);

    $nombre = "Luz Piedad";

    echo $nombre;

    #print("La edad de " + $nombre + " es de " + $edad);

    # LAS VARIABLES PUEDEN IMPRIMIRSE Y ASIGNARSE EN EL MISMO MOMENTO
    echo $direccion = "CALLE 42C #90A-104";

    ?>

</body>

</html>