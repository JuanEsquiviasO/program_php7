<?php

$cosas = [
  'animales' => [
    'gato',
    'perro' => ['Raza1', 'Raza2', 'Raza3', 'Raza4'],
    'pez'
  ],
  'colores'  => ['red', 'azul', 'gris'],
  'ropa'     => ['shirt', 'hat'],
];

// var_dump($cosas);

// $animales = $cosas['animales'];
// var_dump($animales);

// var_dump($animales[1]);

// var_dump($cosas['animales'][2]);

var_dump($cosas['animales']['perro'][2]);