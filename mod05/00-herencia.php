<?php

require_once 'Hijo.php';

$hunter = new Hijo('Hunter');
// $hunter->apellido = 'Sterling';

$hunter->setNombre('Rick');
$hunter->setApellido('Sterling');

if ($hunter->getApellido() == 'Sterling') {
	echo 'Si, lo es.' . PHP_EOL;
}

echo $hunter->getApellido() . PHP_EOL;

echo $hunter->getNombre() . PHP_EOL;
// echo $hunter->apellido . PHP_EOL;

// echo 'Se hereda el apellido del padre: ' . $hunter->apellido . PHP_EOL;

// echo $hunter->getSecreto() . PHP_EOL;

// echo $hunter->saludar() . PHP_EOL;

// echo $hunter->protegido . PHP_EOL;