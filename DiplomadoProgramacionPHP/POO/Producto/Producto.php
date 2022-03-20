<?php

declare(strict_types=1);

class Producto
{

    # Propiedades/Atributos de la clase Producto
    private $idProducto;
    private $nombre;
    private $precio;
    private $categoria;

    # Método construtor de la clase Producto
    public function __construct(int $idProducto, string $nombre = "Producto sin nombre", int $precio, string $categoria = null)
    {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    # Métodos/Funciones getters y setters de la clase Producto
    public function setIdProducto(int $idProducto)
    {
        return $this->idProducto = $idProducto;
    }

    public function getIdProducto(): int
    {
        return $this->idProducto;
    }

    public function setNombre(string $nombre = "Producto sin nombre")
    {
        return $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setPrecio(int $precio)
    {
        return $this->precio = $precio;
    }

    public function getPrecio(): int
    {
        return $this->precio;
    }

    public function setCategoria(string $categoria)
    {
        return $this->categoria = $categoria;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    # Métodos de la clase Producto
    public function venderProducto(int $cantidad = 1)
    {
        if ($cantidad > 1) {
            $total = $this->precio * $cantidad;
            return "Se vendieron " . $cantidad . " " . $this->nombre . " para un total de " . $total;
        } else {
            return "Se vendió un " . $this->nombre . " para un total de " . $this->precio;
        }
    }
}
