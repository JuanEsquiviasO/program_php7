<?php

require_once 'Padre.php';

/**
 * Constantes
 * no cambian y no son redefinidas
 */
define('PI', 3.1416);
echo PI . PHP_EOL;


/**
 * Constantes de clases
 */
$padre = new Padre;
echo $padre::GENERO . PHP_EOL;


/**
 * Arrays constantes
 */
define('FRUTAS', [
	'manzana', 'pera', 'mango'
]);
echo FRUTAS[2] . PHP_EOL;