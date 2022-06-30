<?php

require_once __DIR__.'/../vendor/autoload.php';
use App\Controllers\Matricula;
use App\Models\{Persona,Alumno,Docente,Curso};

$mat = new Matricula(234,"2022-I");
$mat->agregarCurso(new Curso("Base de datos"));
$mat->agregarCurso(new Curso("Matematica"));
echo "     MATRICULA   "."<br>";
echo "Codigo de matricula: ".$mat->getCodMat()."<br>";
echo "Semestre: ".$mat->getSemestre()."<br>";
foreach($mat->mostrar() as $curso){
    echo "Curso: ".$curso->getNombre()."<br>";
}
$alumno = new Alumno("Estefany", "Rojas Gutierrez",72345512, 1998);
echo "    ALUMNO   "."<br>";
echo "Nombres: ".$alumno->getNombres()."<br>";
echo "Apellidos: ".$alumno->getApellidos()."<br>";
echo "Dni: ".$alumno->getDni()."<br>";
echo "Fecha de nacimiento: ".$alumno->getFechaNac()."<br>";

echo "Edad: ".$alumno->calcularEdad(2022)." años"."<br>";

$docente = new Docente("Carmen luisa", "Perez Maylle", 41230054, 1985);
echo "     DOCENTE   "."<br>";
echo "Nombres: ".$docente->getNombres()."<br>";
echo "Apellidos: ".$docente->getApellidos()."<br>";
echo "Dni: ".$docente->getDni()."<br>";
echo "Fecha de nacimiento: ".$docente->getFechaNac()."<br>";

echo "Edad: ".$docente->calcularEdad(2022)." años"."<br>";
