<?php

namespace App\Models;
use App\Models\{Alumno,Docente};
abstract class  Persona
{
    protected String $nombres;
    protected String $apellidos;
    protected int $dni;
    protected int $fechaNac;

    public function __construct(String $nombres, String $apellidos, int $dni, int $fechaNac)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->dni = $dni; 
        $this->fechaNac = $fechaNac;

    }
    public function  getNombres() 
         {
            return $this->nombres;
        }
    public function getApellidos()
    {

        return $this->apellidos;
    }
    public  function getDni() {
        return $this->dni;
    }
    public function getFechaNac() {
        return $this->fechaNac;
    }  
   

    protected abstract function calcularEdad($añoActual);
    
}