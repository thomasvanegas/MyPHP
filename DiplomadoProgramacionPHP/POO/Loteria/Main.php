<?php

require_once("./Loteria.php");

$paisita = new Loteria(1, 20, 7);

$paisita->generarNumero();

$paisita->verificar();

$paisita->generarNumero();

$paisita->verificar();
