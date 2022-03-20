<?php

declare(strict_types=1);

# FUNCIONES

# TODO -> setTelefono, setTelefonos, getTelefonos, getTelefonos

function setTelefono(string $numeroTelefono = "0000000000", array $telefonos)
{
    array_push($telefonos, $numeroTelefono);
    return $telefonos;
}

function getTelefonos(array $telefonos)
{
    # Recorremos el array $telefonos mediante un foreach
    foreach ($telefonos as $telefono) {
        echo $telefono . "<br>";
    }
}


# EJECUCIÓN DEL PROGRAMA

$telefonosFamilia = [];

setTelefono("6042530302", $telefonosFamilia);
setTelefono("6042523515", $telefonosFamilia);
setTelefono("3014706648", $telefonosFamilia);

getTelefonos($telefonosFamilia);

setTelefono("3023556500", $telefonosFamilia);
setTelefono("3102646028", $telefonosFamilia);

getTelefonos($telefonosFamilia);
