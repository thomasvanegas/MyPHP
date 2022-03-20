<?php

declare(strict_types=1);

class Bus extends Auto
{

    # Métodos de la clase hija/subclase/derivada Bus
    public function abrirPuertas()
    {
        return "Abriendo puertas...\nPuertas abiertas\n";
    }
    public function cerrarPuertas()
    {
        return "Cerrando puertas...\nPuertas cerradas correctamente\n";
    }
}
