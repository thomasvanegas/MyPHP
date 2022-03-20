<?php

require_once("./Facebook.php");

# Creamos un objeto vacío ya que la clase Facebook no posee método constructor
$perfil1 = new Facebook();

# Asignamos por medio de los métodos getters y setters valores a los atributos del objeto creado
$perfil1->setName();
$perfil1->setEmail("perfil1@gmail.com");
$perfil1->setPassword("Password1234");

# Ejecución del programa
echo $perfil1->login("perfil1@gmail.edu.co", "Password1234");
echo $perfil1->login("perfil1@gmail.com", "Password1234");

echo $perfil1->getName();

echo $perfil1->addRandomName("Emmanuel");

$perfil1->setName();
echo $perfil1->getName();
