<?php

require_once("./CarroCompras.php");

# Creación del carro de compras N°1
$carroCompras1 = new CarroCompras(); # La clase CarroCompras no posee método constructor

# Se añaden artículos al carro de compras
$carroCompras1->anadirProducto("librarroz", 3);
$carroCompras1->anadirProducto("litroleche", 2);
$carroCompras1->anadirProducto("quesitopequeno", 2);
$carroCompras1->anadirProducto("quesitogrande", 2);

# Se imprime el total del valor a pagar por todos los artículos del carrito
echo "El total a pagar es: " . $carroCompras1->getTotalPagar(0.19) . "\n";
