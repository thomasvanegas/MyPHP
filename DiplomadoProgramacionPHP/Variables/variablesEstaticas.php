<?php

function variableEstatica()
{

    static $number = 0;
    echo $number;
    $number++;
}

variableEstatica(); #0
variableEstatica(); #1
variableEstatica(); #2

# LAS VARIABLES ESTÁTICAS LE OTROGAN A LAS VARIABLES LOCALES LA CAPACIDAD DE RETENER INFORMACIÓN EN
# TIEMPO DE EJECUCIÓN DEL PROGRAMA, ES DECIR, LA KEYWORD STATIC NO PERMITE QUE SE REINICIE LA VARIABLE
# CADA VEZ QUE SE INVOQUE LA FUNCIÓN SINO QUE RETENGA SU VALOR ANTERIOR A LA INVOCACIÓN
