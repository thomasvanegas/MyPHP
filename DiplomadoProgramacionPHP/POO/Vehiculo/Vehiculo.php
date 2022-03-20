<?php

declare(strict_types=1);

class Vehiculo
{

    # Propiedades/Atributos de la clase Vehiculo
    private $tipoVehiculo;
    private $nombre;
    private $marca;
    private $numeroRuedas;
    private $color;
    private $velocidadMaxima;
    private $estaEncendido;

    # Método constructor de la clase Vehiculo
    public function __construct(string $tipoVehiculo = null, string $nombre = null, string $marca = null, int $numeroRuedas = 4, string $color = null, float $velocidadMaxima = 0.0, bool $estaEncendido = false)
    {
        $this->tipoVehiculo = $tipoVehiculo;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->numeroRuedas = $numeroRuedas;
        $this->color = $color;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->estaEncendido = $estaEncendido;
    }

    # Métodos setters y getters de la clase Vehiculo
    public function setNombre(string $nombre = null)
    {
        $this->nombre = $nombre;
        echo "El nombre del vehículo ha sido modificado correctamente.<br>
        El nuevo nombre del vehículo es: " . $this->nombre . "<br>";
    }

    public function getNombre()
    {
        echo "El nombre del vehículo es: " . $this->nombre . "<br>";
    }

    public function setMarca(string $marca = null)
    {
        $this->marca = $marca;
        echo "La marca del vehículo ha sido modificada correctamente.<br>
        La nueva marca del vehículo es: " . $this->marca;
    }

    public function getMarca()
    {
        echo "La marca del vehículo es: " . $this->marca;
    }

    # Métodos/funciones de la clase Vehiculo
    public function encenderVehiculo()
    {
        $this->estaEncendido = true;
        echo "Vehículo encendido correctamente <br>";
    }

    public function apagarVehiculo()
    {
        $this->estaEncendido = false;
        echo "Vehículo apagado correctamente <br>";
    }

    public function getEstado()
    {
        if ($this->estaEncendido === true) {
            echo "Estado del vehículo: ENCENDIDO <br>";
        } else {
            echo "Estado del vehículo: APAGADO <br>";
        }
    }

    public function viajar(string $destino = null)
    {
        switch ($this->estaEncendido) {

            case true:
                echo "El vehículo a comenzado el viaje hacia " . $destino . "<br>";
                echo "El vehículo ha llegado a " . $destino . "<br>";
                break;

            default:
                echo "El vehículo NO HA SIDO ENCENDIDO, por favor enciendalo primero antes de viajar <br>";
                break;
        }
    }
}
