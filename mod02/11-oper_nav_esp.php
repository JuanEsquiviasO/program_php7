<?php

/**
 *operador de nave espacial
 *se emplea para comparar dos expresiones
 *devuelve:
 *-1 si el de la izquierda es menor
 * 0 si son iguales
 * 1 si el de las izquierda es mayor
 * 
 */

// Números enteros
// var_dump(1 <=> 1); // 0
// var_dump(1 <=> 2); // -1
// var_dump(2 <=> 1); // 1

// Floats
// var_dump(1.5 <=> 1.5); // 0
// var_dump(1.5 <=> 2.5); // -1
// var_dump(2.5 <=> 1.5); // 1

// Strings
var_dump('a' <=> 'a'); // 0
var_dump('a' <=> 'b'); // -1
var_dump('b' <=> 'a'); // 1