<?php

declare(strict_types=1);

class Auto
{

    # Atributos de la clase padre Auto
    private $color;
    private $marca;
    private $tipoMatricula;
    private $matricula;
    private $numeroRuedas;
    private $numeroPuertas;
    private $numPuestos;
    private $velocidadMaxima;

    # Método constructor de la clase padre Auto
    public function __construct(string $color, string $marca, string $tipoMatricula, string $matricula, int $numeroRuedas, int $numeroPuertas, int $numPuestos, float $velocidadMaxima)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->tipoMatricula = $tipoMatricula;
        $this->matricula = $matricula;
        $this->numeroRuedas = $numeroRuedas;
        $this->numeroPuertas = $numeroPuertas;
        $this->numPuestos = $numPuestos;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    # Métodos de la clase Padre Auto
    public function encenderVehiculo()
    {
        return "Encendiendo el vehículo... <br>Vehículo encendido correctamente <br>";
    }
    public function apagarVehiculo()
    {
        return "Apagando el vehículo... \nVehiculo apagado correctamente <br>";
    }
}
