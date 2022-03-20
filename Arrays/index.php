<?php

# usando el método contructor -> array();
$persona = array(
    "nombre" => "Thomas Camilo",
    "apellidos" => "Vanegas Acevedo",
    "edad" => 17,
    "tipoDocumento" => "TI",
    "numDocumento" => 1025641781
);

echo $persona["numDocumento"] . "<br>";

# array desde php 5.4 []
$mascota = [
    "nombre" => "Lilo",
    "edad" => 5,
    "sexo" => "femenino"
];

echo $mascota["nombre"] . "<br>";

# amoldamiento de arrays
$amoldamiento = [
    1 => "a",
    "1" => "a",
    1.7 => "a",
    true => "b" #último cambio con el mismo número de clave ya que true == 1 y false == 0
];

var_dump($amoldamiento);

# SALTO DE LÍNEA
echo "<br>";

# PHP no distingue entre arrays indexados y arrays asociativos
$familia = array(
    "padre" => "germán",
    "madre" => "piedad",
    1 => "thomas",
    2 => "juan"
);

var_dump($familia);

# arrays sin clave, usando claves predeterminadas con incremento de enteros
$numerosEnteros = [-2, -1, 0, 1, 2];

# SALTO DE LÍNEA
echo "<br>";

echo $numerosEnteros[0] . "<br>";

var_dump($numerosEnteros);

# SALTO DE LÍNEA
echo "<br>";

# la clave en los arrays incrementa de manera predeterminada teniendo en cuenta el índice anterior a él
$numerosNaturales = array(
    1,
    2,
    3,
    10 => 4,
    5,
    6
);

echo $numerosNaturales[11]; #5 ya que el índice anterior fue 10

# los índices de los arrays se pueden manipular para cambiar su inicio
$meses = [
    1 => "enero",
    "febrero",
    "marzo",
    "abril"
];

# SALTO DE LÍNEA
echo "<br>";

print("El mes número 4 del año es $meses[4]");
