<?php

class Loteria
{

    # Atributos de la clase Loteria
    private $numeroGenerado;
    private $numeroElegido;
    private $minimo;
    private $maximo;

    # Método constructor de la clase Loteria
    public function __construct($minimo, $maximo, $numeroElegido)
    {
        $this->minimo = $minimo;
        $this->maximo = $maximo;
        $this->numeroElegido = $numeroElegido;
        $this->verificar();
    }

    # Métodos de la clase Loteria
    public function generarNumero()
    {
        return $this->numeroGenerado = rand($this->minimo, $this->maximo);
    }

    public function verificar()
    {

        if ($this->numeroElegido > $this->maximo) {
            echo "El número elegido es mayor al número límite permitido, intente con un número menor a " . $this->maximo . "<br>";
        } elseif ($this->numeroElegido < $this->minimo) {
            echo "El número elegido es menor al número límite permitido, intente con un número mayor a " . $this->minimo . "<br>";
        } elseif ($this->numeroElegido === $this->numeroGenerado) {
            echo "¡FELICITACIONES HAS ACERTADO EL NÚMERO!, GANASTE LA LOTERIA, RECLAMA TU PREMIO <br>";
        } else {
            echo "LÁSTIMA, no has acertado al número, vuelve a intentarlo <br>";
        }

        echo $this->getNumeroGenerado();
        echo "RECUERDA: El número que elegiste fue: " . $this->numeroElegido . "<br>";
    }

    public function getNumeroGenerado()
    {
        echo "El número generado fue: " . $this->numeroGenerado . "<br>";
    }
}
