<?php

declare(strict_types=1);

# Arrow Function que suma dos números
$sumar = fn ($num1, $num2) => $num1 + $num2;

# Función anónima equivalente al arrow function anterior
$sumar2 = function ($num1, $num2) {
    return $num1 + $num2;
};

# Función clásica equivalente a las dos funciones anónimas anteriores
function sumar3($num1, $num2)
{
    return $num1 + $num2;
}

var_export($sumar(5, 10));
