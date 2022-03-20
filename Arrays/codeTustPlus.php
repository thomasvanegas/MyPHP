<?php

# Arrays -> https://code.tutsplus.com/es/tutorials/working-with-php-arrays-in-the-right-way--cms-28606

# MÉTODO array_combine() - crea un arreglo usando dos arreglos como params, uno para clave y otro para los valores

$clave = ["cielo", "cesped", "tierra"];
$valores = ["azul", "verde", "café"];

$array = array_combine($clave, $valores);

var_dump($array);

# SALTO DE LÍNEA
echo "<br>";

# array_values() - array_keys() - array_flip()

print_r(array_values($array)); # valores del array $array

# SALTO DE LÍNEA
echo "<br>";

print_r(array_keys($array)); # claves o llaves del array $array

# SALTO DE LÍNEA
echo "<br>";

var_dump($array);

# SALTO DE LÍNEA
echo "<br>";

var_dump(array_flip($array)); # intercambia los valores de las claves con los valores del array
