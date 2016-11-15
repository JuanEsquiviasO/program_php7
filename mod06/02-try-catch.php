<?php

require_once '01-throwling.php';

try {
		// echo beber('cerveza');
		// echo comer('mani') . PHP_EOL;
		echo comer('pollo') . PHP_EOL;

} catch (ComidaException $e) {
		echo 'Atrapamos excepcion de comida: ' . $e->getMessage(). PHP_EOL;

} catch (BebidaException $e) {
		echo 'Atrapamos excepcion de bebida: ' . $e->getMessage(). PHP_EOL;

} catch (Exception $e) {
		echo 'Atrapamos una excepcion: ' . $e->getMessage(). PHP_EOL;

} finally {
		echo "Esto se ejecuta luego del try catch.\n";
}

echo 'Fin.' . PHP_EOL;