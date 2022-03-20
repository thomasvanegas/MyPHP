<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Añadir Componentes en PHP -Partes de Código Reutilizables en Diferentes Páginas-</title>
</head>

<body>

    <h1>Esta página integra otros archivos .php lo que en ReactJS se denomina Components</h1>

    <div id="contenedor">

        <?php include("encabezado.php"); ?>

        <div id="contenido-principal">

            <h2>Contenido Principal</h2>

        </div>

        <?php include("botonera.php"); ?>

        <?php include("pie.php"); ?>

    </div> <!-- SE CIERRA EL DIV CON id="contenedor" -->

</body>

</html>