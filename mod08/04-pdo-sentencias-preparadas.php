<?php

try {

	$pdo = new PDO(
		'mysql:host=127.0.0.1;dbname=store',
		'root',
		'rommel'
	);

	$sql = 'TRUNCATE TABLE products';
	$sentencia = $pdo->prepare($sql);
	$sentencia->execute();


	// preparation
	$sql = 'INSERT INTO products (name, size, price) VALUES (:name, :size, :price)';
	$sentencia = $pdo->prepare($sql);

	//link
	$sentencia->bindParam(':name', $name);
	$sentencia->bindParam(':size', $size);
	$sentencia->bindParam(':price', $price);

	// run
	// insert row 1
	$name = 'T-shirt Lego Indiana Jones';
	$size = 'M';
	$price = 1500;
	$sentencia->execute();

	// insert row 2 different data
	$name = 'T-shirt DC COMICS';
	$size = 'XL';
	$price = 4000;
	$sentencia->execute();


	// Link parameter wi{th name and execute with namespace
	$sentencia->execute([
		':name' => 'T-shirt Lego Bionicle',
		':size' => 'XXL',
		':price' => 2600
	]);

	$sentencia->execute([
		':name' => 'T-shirt Lego TECHNIC',
		':size' => 'S',
		':price' => 5000
	]);

	//Parameters sustitute
	$sql = 'SELECT name, size, price FROM products WHERE name LIKE ? AND price > ?';
	$sentencia = $pdo->prepare($sql);

	$sentencia->execute(['%S%', 1000]);

	$resultado = $sentencia->fetchAll();

	foreach ($resultado as $fila) {
		echo "{$fila['name']} vale {$fila['price']}.\n";
	}

	//update registers
	$sql = 'UPDATE products SET price = :price WHERE id = :id';
	$otraSentencia = $pdo->prepare($sql);
	$otraSentencia->execute([
		':price' => 5000,
		':id' => 1
	]);

	// delete registers
	$sql = 'DELETE FROM products WHERE id = :id';
	$sentenciaDelete = $pdo->prepare($sql);
	$sentenciaDelete->execute([
		':id' => 1
	]);

} catch (PDOException $e) {
	echo 'Error!:' . $e->getMessage() . PHP_EOL;

} finally {
	$pdo = null;
}