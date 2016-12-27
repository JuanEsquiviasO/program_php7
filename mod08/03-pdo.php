<?php

try {

	$pdo = new PDO(
		'mysql:host=127.0.0.1;dbname=store',
		'root',
		'rommel'
	);

	$sql = 'SELECT name, price FROM products';
	$resultado = $pdo->query($sql);

	foreach ($resultado as $fila) {
		echo "{$fila['name']} vale {$fila['price']}.\n";
	}

} catch (PDOException $e) {
	echo 'Error!:' . $e->getMessage() . PHP_EOL;

} finally {
	$pdo = null;
}