<?php

require_once("./Mascota.php");

# CREACIÓN DE UNA INSTANCIA DE MASCOTA (OBJETO) A PARTIR DEL MÉTODO CONSTRUCTOR
$perro1 = new Mascota("Sandy", 10, "Café", "Pincher Miniatura", "Thomas Vanegas");
$gato1 = new Mascota("Tony Alfonso", 1, "Negro", "Gato Autraliano", "Manuela Vanegas");

/* CREACIÓN DE UNA INSTANCIA DE MASCOTA SIN UN MÉTODO CONSTRUCTOR 

$perro1->setNombre("Lilo"); # Para recuperar este valor se debe hacer uso del método getNombre
$perro1->setEdad(5);
$perro1->setColor("Negro");
$perro1->setRaza("Labrador");
$perro1->setPropietario("Thomas Vanegas");

*/

echo $perro1->getNombre() . "<br>";
echo $perro1->getEdad() . "<br>";
echo $perro1->getColor() . "<br>";
echo $perro1->getRaza() . "<br>";
echo $perro1->getPropietario() . "<br>";

$perro1->saludar("Camilo");

$perro1->setColor("Amarillo");
echo $perro1->getColor() . "<br>";

$perro1->setNombre("Lilo");
$perro1->saludar("Camilo");
