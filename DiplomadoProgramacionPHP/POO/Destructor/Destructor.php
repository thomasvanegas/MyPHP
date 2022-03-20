<?php

class Destructor
{

    # Atributos de la clase Destructor
    private $nombreDestruccion;

    # Método constructor vacío
    public function __construct()
    {
        echo "En el constructor <br>";
    }

    # Métodos getters y setters -> public ya que es la manera de acceder a los atributos privados
    public function setNombreDestruccion(string $nombreDestruccion = null)
    {
        $this->nombreDestruccion = $nombreDestruccion;
    }

    public function getNombreDestruccion()
    {
        echo $this->nombreDestruccion . "<br>";
    }

    # Método destructor
    public function __destruct()
    {
        echo "Destruyendo el objeto <br>";
    }
}
