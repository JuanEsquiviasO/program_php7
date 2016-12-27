<?php

// connect
$mysqli = new mysqli('127.0.0.1', 'root', 'rommel', 'store');

// Check connection 
if ($mysqli->connect_errno) {
	echo 'Failed connect with MySQL: ' . $mysqli->connect_error . PHP_EOL;
}

//preparation
$sql = "INSERT INTO products (name, size, price) VALUES (?, ?, ?)";
$sentencia = $mysqli->prepare($sql);

if (!$sentencia) {
	echo "Failed preparation: ({$mysqli->errno}) {$mysqli->error}.\n";
}

//Link parameters
// i entero
// s string
// d double
// b blob
$name = 'T-shirt Lego FIFA';
$size = 'XL';
$price = 6000;
if (!$sentencia->bind_param('ssi', $name, $size, $price)) {
	echo "Failed link parameters: ({$mysqli->errno}) {$mysqli->error}.\n";
}

//run
if (!$sentencia->execute()) {
	echo "Failed the execute: ({$mysqli->errno}) {$mysqli->error}.\n";
} else {
	echo "{$sentencia->affected_rows} Fila insertada.\n";
}


//preparar
$sql = 'SELECT name, price FROM products';
$sentencia2 = $mysqli->prepare($sql);

//vincular, no es necesario

//ejecutar
$sentencia2->execute();

//vicular variables de resultados
$sentencia2->bind_result($name, $price);

//usar datos
while ($fila = $sentencia2->fetch()) {
	echo "{$name} cuesta {$price}.\n";
}

//cerrar sentencia
$sentencia->close();

//cerrar la conexión
$mysqli->close();


// stay 1:07 hora