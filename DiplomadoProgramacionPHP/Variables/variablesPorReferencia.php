<?php

$nombre = "Thomas Camilo Vanegas Acevedo";
$name = &$nombre; #variable por refencia, es decir, apunta a -> utiliza el &

echo $nombre;
echo $name;

$name = "Luz Piedad Acevedo Patiño";

echo $nombre;
echo $name;
