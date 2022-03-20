<?php

require_once("./Persona.php");

$administrador = new Persona();

print($administrador->saludar("Thomas"));
print($administrador->leerLibro("Pensar Rápido, Pensar Despacio"));
