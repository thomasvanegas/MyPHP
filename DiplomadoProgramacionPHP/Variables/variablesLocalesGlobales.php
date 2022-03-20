<?php

$estatura = 1.73;

function cambioEstatura()
{

    $GLOBALS["estatura"] = 2.03;
}

function cambioEstaturaDos($nuevaEstatura)
{

    global $estatura;

    $estatura = $nuevaEstatura;
}

echo $estatura;

cambioEstatura();

echo $estatura;

cambioEstaturaDos(1.87);

echo $estatura;
