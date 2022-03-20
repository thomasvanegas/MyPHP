<?php

class Calculadora
{

    # Atributos de la clase Calculadora
    private $num1;
    private $num2;
    private $operador;

    # Método constructor
    public function __construct(float $num1 = 0.0, float $num2 = 0.0, string $operador = '+')
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operador = $operador;
    }

    # Métodos de la clase Calculadora
    public function operar()
    {
        switch ($this->operador) {
            case '+':
                $this->sumar();
                break;
            case '-':
                $this->restar();
                break;
            case '*':
                $this->multiplicar();
                break;
            case '/':
                $this->dividir();
                break;
            case '**':
                $this->elevar();
                break;
            default:
                echo "OPERADOR INVÁLIDO";
                break;
        }
    }


    public function sumar()
    {
        $suma = $this->num1 + $this->num2;
        echo $this->num1 . " " . $this->operador . " " . $this->num2 . " = " . $suma;
    }

    public function restar()
    {
        $resta = $this->num1 - $this->num2;
        echo $this->num1 . " " . $this->operador . " " . $this->num2 . " = " . $resta;
    }

    public function multiplicar()
    {
        $multiplicacion = $this->num1 * $this->num2;
        echo $this->num1 . " " . $this->operador . " " . $this->num2 . " = " . $multiplicacion;
    }

    public function dividir()
    {
        $division = $this->num1 / $this->num2;
        echo $this->num1 . " " . $this->operador . " " . $this->num2 . " = " . $division;
    }

    public function elevar()
    {
        $potencia = $this->num1 ** $this->num2;
        echo $this->num1 . " " . $this->operador . " " . $this->num2 . " = " . $potencia;
    }
}
