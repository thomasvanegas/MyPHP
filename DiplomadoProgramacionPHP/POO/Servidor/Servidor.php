<?php

declare(strict_types=1);

class Servidor
{

    # Propiedades/Atributos de la clase Servidor
    private $direccionIp;
    private $version;
    private $usuario;
    private $contrasena;

    # Método constructor de la clase Servidor
    public function __construct(string $direccionIp = "127.0.0.1", float $version = 1.0, string $usuario = "root", int $contrasena = 123)
    {
        $this->direccionIp = $direccionIp;
        $this->version = $version;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;

        echo "Servidor creado correctamente <br>";
    }

    # Métodos getters y setters de la clase Servidor usando los métodos mágicos __set() y __get()
    public function __set($property, $value)
    {
        echo property_exists($this, $value) ? $this->$property = $value : "Propiedad/Atributo no existe en el objeto o la clase";
    }

    public function __get($name)
    {
        echo property_exists($this, $name) ? $this->$name : "Propiedad/Atributo no existe en el objeto o la clase";
    }

    # Métodos de la clase Servidor
    public function ingresar(string $usuario, int $contrasena)
    {
        echo ($usuario === $this->usuario && $contrasena === $this->contrasena) ? "Ingreso EXITOSO, Bienvenido <br>" : "ERROR: Contraseña o usuario incorrecto, intente nuevamente <br>";
    }

    public function updateServerVersion(float $newServerVersion): float
    {
        echo "La nueva versión del servidor es: " . $newServerVersion . "<br>";
        return $this->version = $newServerVersion;
    }

    public function getServerInformation(): void
    {
        echo "Dirección IP: " . $this->direccionIp . "<br>Version del Sevidor: " . $this->version . "<br>";
    }
}
