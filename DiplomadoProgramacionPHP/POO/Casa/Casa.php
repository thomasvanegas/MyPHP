<?php

declare(strict_types=1);

class Casa
{

    # Atributos de la clase Casa
    private $tamano;
    private $precio;
    private $estado;

    # Método constructor de la clase Casa
    public function __construct(float $tamano, int $precio = 0, bool $estado = false)
    {
        $this->tamano = $tamano;
        $this->precio = $precio;
        $this->estado = $estado;
    }

    # Métodos setters y getters de la clase Casa
    public function setTamano($tamano)
    {
        $this->tamano = $tamano;
        echo "El nuevo tamaño de la casa es: " . $this->tamano . " metros cuadrados.";
    }

    public function getTamano()
    {
        return "El tamaño de la casa es: " . $this->tamano . " metros cuadrados";
    }

    public function setPrecio(int $precio = 0): int
    {
        return $this->precio = $precio;
        echo "El precio de la casa se ha sido modificado CORRECTAMENTE";
    }

    public function getPrecio() # Este método es un método de tipo void o vacío
    {
        echo "Precio de la casa: " . number_format($this->precio)  . "<br>";
    }

    public function setEstado(bool $estado): bool
    {
        return $this->estado = $estado;
    }

    public function getEstado(): string
    {

        return $this->estado ? "Estado de la casa: OCUPADA <br>" : "Estado de la casa: VACÍA <br>"; # operador ternario

        /*
        if ($this->estado == false) {
            return "Estado de la casa: VACÍA";
        } else {
            return "Estado de la casa: OCUPADO";
        }
        */
    }

    # Métodos de la clase Casa
    public function aumentarPrecio($aumento): int
    {
        return $this->precio += $aumento;
    }
}
