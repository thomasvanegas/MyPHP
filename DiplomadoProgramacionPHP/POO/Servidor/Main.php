<?php

require_once("./Servidor.php");

# Se crea el objeto N°1 -> Servidor Apache
$apacheServer = new Servidor("123.4.5.6", 1.1, "root", 8189);

# Ejecución del programa
$apacheServer->ingresar("root", 123);
$apacheServer->ingresar("root", 8189);

$apacheServer->getServerInformation();

$apacheServer->updateServerVersion(2.4);

$apacheServer->getServerInformation();
