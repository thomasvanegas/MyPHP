<?php

require_once("./Palabra.php");

$spanishWord = new Palabra("Ratón"); # Creo una instancia de Palabra y ya puedo usar los métodos de la clase
$spanishWord->getPalabra();

$englishWord = new Palabra("Mouse");
$englishWord->getPalabra();

print("Primera instancia de la clase Palabra: " . $spanishWord->getPalabra());
print("Segunda instancia de la clase Palabra: " . $englishWord->getPalabra());
