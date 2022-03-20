<?php

class Persona
{

    # ATRIBUTOS DE LA CLASE PERSONA
    private $nombre;
    private $apellidos;
    private $edad;
    private $tipo_doc;
    private $num_doc;

    # MÉTODO CONSTRUCTOR
    public function __construct()
    {
        $nombre = "Thomas Camilo";
        $apellidos = "Vanegas Acevedo";
        $edad = 17;
        $tipo_doc = "TI";
        $num_doc = "1025641781";
    }

    # MÉTODOS O FUNCIONES DE LA CLASE
    public function saludar(string $nombre = "Amigo")
    {
        return "Hola $nombre <br>";
    }

    public function despedir(string $nombre = "Amigo")
    {
        return "Chao $nombre <br>";
    }

    public function leerLibro(string $nombreLibro)
    {
        return "Leyendo $nombreLibro <br>";
    }
};
