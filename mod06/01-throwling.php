<?php

require_once 'BebidaException.php';
require_once 'ComidaException.php';

function beber($bebida)
{
	if ($bebida == 'cerveza') {
		// throw new Exception('El alcohol es malo');
		throw new BebidaException;
		
	}

	return "Bebiendo {$bebida}.";
}

// echo beber('jugo de mora') . PHP_EOL;
// echo beber('cerveza') . PHP_EOL;


function comer($comida)
{
	if ($comida == 'mani') {
		throw new ComidaException;
	}

	return "Comiendo {$comida}";
}

// echo comer('mani') . PHP_E OL;