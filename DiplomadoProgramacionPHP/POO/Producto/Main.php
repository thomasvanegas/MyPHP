<?php

require_once("./Producto.php");

$producto1 = new Producto(1, "Leche Colanta Entera", 3000, "Lácteos");

# Se usa el método mágico __clone() para crear una copia del objeto independiente del otro;
$producto2 = clone $producto1;
$producto3 = clone $producto1;

# Se modifica el $producto2, ya que se necesita el mismo precio y categoría que le $producto1, pero diferente nombre y id.
$producto2->setIdProducto(2);
$producto2->setNombre("Leche Colanta Deslactosada");

$producto3->setIdProducto(3);
$producto3->setNombre("Leche Colanta Semidescremada");

# Pruebas al programa
echo "El nombre del producto N°1 es: " . $producto1->getNombre() . "<br>";
echo "El nombre del producto N°2 es: " . $producto2->getNombre() . "<br>";
echo "El nombre del producto N°3 es: " . $producto3->getNombre() . "<br>";
