<?php

require_once("./Casa.php");

# Creación del objeto N°1
$casaLaureles = new Casa(300, 360000000, false);
$casaLaureles->getPrecio();
$casaLaureles->aumentarPrecio(40000000);
$casaLaureles->getPrecio();
echo $casaLaureles->getEstado();
$casaLaureles->setEstado(true);
echo $casaLaureles->getEstado();
