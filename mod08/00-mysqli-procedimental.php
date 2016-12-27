<?php 

// connect
$mysqli = mysqli_connect('127.0.0.1', 'root', 'rommel', 'store');

// Check connection 
if (mysqli_connect_errno($mysqli)) {
	echo 'Failed connect with MySQL: ' . mysqli_connect_error();
}

// Run sql
$resultado = mysqli_query($mysqli, "SELECT nombre, precio FROM productos");

// Print queues 
while ($fila = mysqli_fetch_assoc($resultado)) {
	echo $fila['nombre'] . ' cuesta ' . $fila['precio'] . PHP_EOL;
}

// Free memory
mysqli_free_result($resultado);

// close connection
mysqli_close($mysqli);