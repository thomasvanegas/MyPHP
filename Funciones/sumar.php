<?php

# Esta línea de código hace que los tipos de datos en las funciones sean estrictos
declare(strict_types=1);

function sumar(int $a = 0, int $b = 0)
{
    return $a + $b;
}

function multiplicar(float $a = 1, float $b = 1)
{
    return $a * $b;
}

function elevar(float $base = 1, float $exponente = 1)
{
    return $base ** $exponente;
}

# print(sumar(10, "10")); -> se esperaba un int y se está pasando un string por tanto, genera error -> línea 4

# print(sumar(10, "10")); # aquí no genera error si la línea 4 se comenta (declare)

print(sumar(10, 10)); # 20

print(multiplicar(10));

print(elevar(5, 2));

print(elevar(5));
