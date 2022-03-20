<?php

$saludar = function (string $nombre = null) {
    print("Hola $nombre <br>");
};

$saludar("Mundo");
$saludar("Thomas");
