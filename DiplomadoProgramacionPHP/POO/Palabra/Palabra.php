<?php

declare(strict_types=1);

class Palabra
{

    // Atributos de la clase palabra
    private static $palabra;

    // Método constructor
    public function __construct(string $palabra = null)
    {
        self::$palabra = $palabra; # self ya que $palabra es un atributo static, de lo contrario se usa $this->atributo
    }

    // Métodos de la clase
    public function getPalabra()
    {
        echo self::$palabra . "<br>"; # Se imprime el valor de la palabra en su atributo
    }
}
