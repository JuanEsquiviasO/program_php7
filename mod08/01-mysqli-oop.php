<?php 

// connect
$mysqli = new mysqli('127.0.0.1', 'root', 'rommel', 'store');

// Check connection 
if ($mysqli->connect_errno) {
	echo 'Failed connect with MySQL: ' . $mysqli->connect_error . PHP_EOL;
}

// Run sql
$resultado = $mysqli->query("SELECT nombre, precio FROM productos");

// Print queues 
while ($fila = $resultado->fetch_assoc()) {
	echo $fila['nombre'] . ' cuesta ' . $fila['precio'] . PHP_EOL;
}

// Free memory
$resultado->free();

// close connection
$mysqli->close();