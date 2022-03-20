<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo de PHP - Este es mi primer programa escrito en php</title>
</head>

<body>

    <?php

    print("<h2>¡Hola Mundo! Este párrafo está escrito por el intérprete de PHP </h2>");

    ?>

    <p>Este párrafo está escrito en lenguaje HTML</p>

    <?php

    print("<h2>Este H2 está escrito por el intérprete de PHP</h2>");

    ?>

    <h3>Este subtítulo está escrito en HTML vanilla</h3>

    <?php

    print("<p>Este párrafo también está escrito por el software intérprete de PHP</p>");

    ?>

    /* USANDO EL ESCAPE EN PHP */

    <?php

    print(" <h1 class=\"nombre__clase\">Bienvenidos, este título tiene barras de escape</h1> ");

    ?>

    /* SOLUCIONANDO EL PROBLEMA DE LAS COMILLAS DOBLES Y LOS ESCAPES */

    <?php

    print('<h1 class="nombre__clase">Bienvenidos, este título tiene comillas simples y comillas dobles
    para evitar el uso de escapes y solucionar el problema con mayor facilidad</h1>');

    ?>

    <?php

    echo "Hola mundo usando el comando 'echo' y comillas dobles con simples";
    echo '<html>
    
        <head>

            <title>Esto es un echo entre comillas simples</title>

        </head>

        <body>

            "Esto tiene comillas dobles, "muchas comillas dobles" y no importa"

        </body>

        </html>';

    ?>

</body>

</html>