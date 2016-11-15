<?php declare(strict_types = 1);

function bienvenida(...$nombres)
{
	foreach ($nombres as $nombre) {
		echo "Bienvenido, {$nombre}.\n";
	}
}

bienvenida('Rick', 'Ben', 'Max', 'Roy');


function sumaDeEnteros(int ...$enteros)
{
	return array_sum($enteros);
}

echo sumaDeEnteros(1, 2, 3) . PHP_EOL;