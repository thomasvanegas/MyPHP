<?php

declare(strict_types=1);

class Facebook
{

    # Atributos/Prpiedades de la clase Facebook
    private $name;
    private $email;
    private $password;
    private $ramdomNames = ["Thomas", "Camilo", "Juan", "David", "Luz", "Piedad", "German", "Mauricio"];

    # Métodos getters y setter de la clase Facebook
    public function setName()
    {
        return $this->name = $this->ramdomNames[array_rand($this->ramdomNames)];
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail(string $email = null): string
    {
        echo "Email asignado/cambiado correctamente a: " . $email . "<br>";
        return $this->email = $email;
    }

    public function getEmail()
    {
        echo "Email actual: " . $this->email . "<br>";
    }

    public function setPassword(string $password): string
    {
        echo "Contraseña asignada/modificada correctamente a: " . $password . "<br>";
        return $this->password = $password;
    }

    public function getPassword()
    {
        echo "Contraseña: " . $this->password . "<br>";
    }

    # Métodos de la clase Facebook
    public function addRandomName($ramdomName)
    {
        return array_push($this->ramdomNames, $ramdomName);
    }

    public function deleteLastRamdomName()
    {
        return array_pop($this->ramdomNames);
    }

    public function login(string $email, string $password)
    {
        return ($email === $this->email and $password === $this->password) ? "SESIÓN INICIADA <br>" : "Email y/o contraseña INCORRECTAS <br>";
    }
}
