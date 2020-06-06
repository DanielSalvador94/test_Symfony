<?php
namespace AppBundle\Service;

class Acciones
{
    private $listaNombres = [];
    const EMAIL = "salvdan94@gmail.com";
    const TELEFONO = "622176929";

    public function generarNombre()
    {
        $arrayNombres = $this->listaNombres = array("David","Daniel","Juan","Pepe","Omar","Sergio","Alberto","Álvaro","Jorge");

        $nombreUsuario = $arrayNombres[array_rand($arrayNombres)];

        return $nombreUsuario;
    }
    public function saludar()
    {
        $nombreGenerado = $this->generarNombre();
        return "Hola ".$nombreGenerado."¿Hablamos? ";

    }
    public function despedir()
    {
        $email = Acciones::EMAIL;
        $telefono = Acciones::TELEFONO;

        return "¡Adios!, recuerda mi Email es ".$email.", y mi teléfono ".$telefono;
    }

}
