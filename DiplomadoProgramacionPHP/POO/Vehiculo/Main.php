<?php

require_once("./Vehiculo.php");

# Creación objeto N°1 -> carro
$carro1 = new Vehiculo("Carro", "GLE 350", "Mercedez Benz", 4, "Plateado", 250, false);

# Creación objeto N°2 -> Moto
$moto1 = new Vehiculo("Moto", "NKD 150", "AKT", 2, "Blanco", 120, false);

# Creación objeto N°3 -> Bicicleta
$bicicleta1 = new Vehiculo("Bicicleta", "RC 100", "Triban", 2, "Negro");


echo "<h3>Manipulación objeto N°1</h3>";
$carro1->getEstado();
$carro1->encenderVehiculo();
$carro1->getEstado();
$carro1->viajar("Medellín");
$carro1->apagarVehiculo();
$carro1->getEstado();
$carro1->viajar("Bogotá");

echo "<h3>Manipulación objeto N°2</h3>";
$moto1->getEstado();
$moto1->viajar("Palmira");
$moto1->encenderVehiculo();
$moto1->getEstado();
$moto1->viajar("Palmira");
$moto1->getNombre();
$moto1->setNombre("Apache 200");
$moto1->getNombre();
$moto1->apagarVehiculo();
