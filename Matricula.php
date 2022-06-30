<?php

namespace App\Controllers;
use App\Models\Curso;

class Matricula
{
    private $codMat;

    private $semestre;

    private $curso;

public function __construct($codMat, $semestre)

    {
    $this->codMat = $codMat;

    $this->semestre = $semestre;

    $this->curso = [];
    }

public function getCodMat()
    {
    return $this->codMat;
    }
   
public function getSemestre()
    {
    return $this->semestre;
    }

public function agregarCurso(Curso $curso)
    {
        $this->curso[] = $curso;
    }

public function mostrar()
    {
        return $this->curso;
    }
}