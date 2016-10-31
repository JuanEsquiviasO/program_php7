<?php

require_once 'Producto.php';

//Crea nueva instancia de Productp
$producto = new Producto;

// Setea propiedades
$producto->nombre = 'T-Shirt Lego Technic';
$producto->talla = 'L';
// $producto->precio = '12';

//Accediendo a las propiedades
// echo $producto->nombre . PHP_EOL;
// echo $producto->talla . PHP_EOL;
// echo $producto->precio . PHP_EOL;



//creando otra instancia de Producto
$producto2 = new Producto;

$producto2->nombre = 'T-Shirt Lego DC Comics';
$producto2->talla = 'M';
$producto2->precio = '11';

// echo "Otro producto: {$producto2->nombre}.\n";


// echo "El precio de {$producto->nombre} es {$producto->precio}.\n";
// echo "El precio de {$producto2->nombre} es {$producto2->precio}.\n";

$producto->resumen();
$producto2->resumen();