<?php declare(strict_types = 1);

/**
 * return type declaration
 */

// $numero = 7;

function suma(int $x, int $y) : int
{
  // global $numero;
  // return 'La suma es ' . ($x + $y);
  return $x + $y;
}

// var_dump(suma(2,6));