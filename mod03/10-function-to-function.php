<?php

/**
 * 
 * [aritmetica description]
 * @param  Closure $operation
 * @param  $mixed  $number1  
 * @param  $mixed  $number2  
 * @return $mixed            
 */
function aritmetica(Closure $operation, $number1, $number2)
{
  return $operation($number1, $number2);
}

$add = function ($num1, $num2) {
  return $num1 + $num2;
};

$subtract= function ($num1, $num2) {
  return $num1 - $num2;
};

echo aritmetica($add, 9, 2);
echo PHP_EOL;

// echo aritmetica(7, 9, 2);
// echo PHP_EOL;

echo aritmetica($subtract, 9, 2);
echo PHP_EOL;
