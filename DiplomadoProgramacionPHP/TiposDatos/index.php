<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Datos en PHP</title>
</head>

<body>

    <header>
        <h1>TIPOS DE DATOS EN PHP</h1>
    </header>

    <main>

        <h2>Los tipos de datos soportados en PHP son</h2>

        <ol>
            <li>String</li>
            <li>Integer</li>
            <li>Float</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>Null</li>
        </ol>

        <h3>Ejemplo de Sting</h3>
        <?php

        $nombre = "THOMAS CAMILO VANEGAS ACEVEDO";
        echo "<h4>$nombre</h4>";

        echo "Usando el método/función var_dump() -> ";
        $varDump = var_dump($nombre);

        ?>

    </main>

    <aside>
        <h3>ASIDE</h3>
    </aside>

    <footer>
        <h3>FOOTER</h3>
    </footer>

</body>

</html>