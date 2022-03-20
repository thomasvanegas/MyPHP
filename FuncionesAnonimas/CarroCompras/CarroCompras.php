<?php

declare(strict_types=1);

class CarroCompras
{

    # Constantes
    const PRECIO_LIBRARROZ = 1600;
    const PRECIO_LITROLECHE = 3000;
    const PRECIO_QUESITOPEQUENO = 3200;
    const PRECIO_QUESITOGRANDE = 5500;

    # Atributos de la clase CarroCompras
    private $productos = [];

    # Métodos de la clase CarroCompras
    public function anadirProducto(string $producto, int $cantidad)
    {
        $this->productos[$producto] = $cantidad;
    }

    public function getCantidad($producto)
    {
        return isset($this->productos[$producto]) ? $this->productos[$producto] : "Producto Inexistente";
    }

    public function getTotalPagar($impuesto)
    {

        $totalPagar = 0;

        $llamadaRetorno = function (int $cantidad, string $producto) use ($impuesto, &$totalPagar) {
            $precioUnidad = constant(__CLASS__ . "::PRECIO_" . strtoupper($producto));
            $totalPagar += ($precioUnidad * $cantidad) * ($impuesto + 1.0);
        };

        array_walk($this->productos, $llamadaRetorno);

        return round($totalPagar, 2);
    }
}
