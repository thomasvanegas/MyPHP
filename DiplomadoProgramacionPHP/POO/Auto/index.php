<?php

require_once("./Auto.php");
require_once("./Bus.php");

$GLE350 = new Auto("Blanco", "Mercedes Benz", "Privada", "THO204", 4, 4, 6, 270);
$circularSur = new Bus("Verde", "Chevrolet", "Pública", "CIR549", 6, 3, 20, 80);

echo $GLE350->encenderVehiculo;
echo $circularSur->abrirPuertas;
