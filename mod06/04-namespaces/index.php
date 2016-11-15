<?php 

require_once 'Ecole/Estudiante.php';
require_once 'Yale/Estudiante.php';
require_once 'Estudiante.php';
require_once 'Ecole/Profesor.php';

// use Ecole\Estudiante as Alumno;
// use Ecole\Profesor;
use Ecole\{Estudiante as Alumno, Profesor};

$estudiante1 = new Alumno('Roy');
$estudiante2 = new Yale\Estudiante('Rick');
$estudiante3 = new \Estudiante('Max');

echo $estudiante1->saludar() . PHP_EOL;
echo $estudiante2->saludar() . PHP_EOL;
echo $estudiante3->saludar() . PHP_EOL;


$profesor = new Profesor('Henry Global', 'Protoculture 1');
echo $profesor->saludar() . PHP_EOL;