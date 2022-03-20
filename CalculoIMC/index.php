<?php

declare(strict_types=1);

# FUNCIÓN QUE CALCULA EL ÍNDICE DE MASA CORPORAL

function calcularIMC(float $estatura = 0, float $peso = 0): float # : float hace estricta el retorno de la función
{
    return $peso / ($estatura ** 2);
};

print(calcularIMC(1.73, 71)); # 23.722
