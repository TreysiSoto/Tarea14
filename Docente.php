<?php

namespace App\Models;
use App\Models\Persona;
class Docente extends Persona
{
    public function __persona(String $nombres, String $apellidos, int $dni, int $fechaNac)
    {
        parent:: __persona($nombres, $apellidos, $dni, $fechaNac);

    }

    public function calcularEdad($añoActual):int
    {
        return $añoActual - $this->fechaNac;
    }
}