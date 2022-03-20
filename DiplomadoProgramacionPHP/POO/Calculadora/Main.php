<?php

require_once("./Calculadora.php");

$casio = new Calculadora(10, 5, "+");
$casio->operar();

/*

print("La suma es: " . $calculadora->sumar(50, 50) . "<br>");
print("La resta es: " . $calculadora->restar(50, 25) . "<br>");
print("La multiplicación es: " . $calculadora->multiplicar(5, 10) . "<br>");
print("La división es: " . $calculadora->dividir(100, 2) . "<br>");
print("La potenciación es: " . $calculadora->elevar(5, 3) . "<br>");

*/