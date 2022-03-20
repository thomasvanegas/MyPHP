<?php

# FUNCIONES DEL PROGRAMA
function enviarEmail($desde, $destinatarios, $asunto, $mensaje)
{

    print("

        <h2>Preparando el envío del email...<br></h2> 

        <h3>Enviado desde: $desde <br></h3>

        <h3>Asunto: $asunto <br></h3>

        <h3>Mensaje: $mensaje <br></h3>

    ");

    foreach ($destinatarios as $destinatario) {

        print("Para: $destinatario <br>");
    };

    print("<br><b>Email enviado exitosamente</b><br>");
};

#VARIABLES DEL PROGRAMA -> Array con diferentes correos que son los destinatarios del email
$destinatariosEmail = [

    "tcvanegas@misena.edu.co",
    "german.vanegas1967@gmail.com",
    "thomascamilovanegasacevedo2018@gmail.com"

];

# INVOCACIÓN A LA FUNCIÓN
enviarEmail("thomas.vanegas@gmail.com", $destinatariosEmail, "Función Enviar Email", "Cordial saludo");

$destinatariosEmail = [

    "carlitos@hotmail.com",
    "marta@outlook.com",
    "henry@gmail.com"

];

# INVOCACIÓN A LA FUNCIÓN
enviarEmail("gestionmatriculas@upb.edu.co", $destinatariosEmail, "Confirmación Matrícula", "Cordial saludo");
