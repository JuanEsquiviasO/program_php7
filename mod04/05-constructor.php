<?php

require_once 'Producto.php';

$producto1 = new Producto('T-Shirt Lego Bionicle', 'XL');
$producto2 = new Producto('T-Shirt Lego MindStorm', 'ML');
$producto3 = new Producto('T-Shirt Lego Star Wars', 'S');
$producto4 = new Producto('T-Shirt Lego Space', 'XS');

echo $producto1->nombre . PHP_EOL;
echo $producto2->nombre . PHP_EOL;
echo $producto3->nombre . PHP_EOL;
echo $producto4->nombre . PHP_EOL;