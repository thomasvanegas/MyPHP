<?php

declare(strict_types=1);

class Mascota
{

    # ATRIBUTOS DE LA CLASE MASCOTA
    private $nombre;
    private $edad;
    private $color;
    private $raza;
    private $propietario;

    # MÉTODO CONSTRUCTOR
    public function __construct(string $nombre = null, int $edad = 1, string $color = null, string $raza = null, string $propietario = null)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->color = $color;
        $this->raza = $raza;
        $this->propietario = $propietario;
    }

    # MÉTODOS DE LA CLASE MASCOTA
    public function setNombre(string $nombre = null)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setEdad(int $edad = 1)
    {
        $this->edad = $edad;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setColor(string $color = null)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRaza(string $raza = null)
    {
        $this->raza = $raza;
    }

    public function getRaza()
    {
        return $this->raza;
    }

    public function setPropietario(string $propietario = null)
    {
        $this->propietario = $propietario;
    }

    public function getPropietario()
    {
        return $this->propietario;
    }

    public function saludar($nombre)
    {
        echo $this->nombre . " está saludando a $nombre <br>";
    }
};
