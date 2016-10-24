<?php

function welcome($name)
{
  echo "Hi {$name}!!\n";
}

welcome('Fokker');
welcome('Rick');
welcome('Max');
welcome('Ben');

function add($number1, $number2, $number3)
{
  return $number1 + $number2 + $number3;
}

echo add(4, 5, 1);
echo PHP_EOL;

/*
other way!!
 */

function welcomeAll()
{
  $names = func_get_args();
  foreach ($names as $name) {
    echo "Welcome, {$name}.\n";
  }
}

// welcomeAll('Miriya', 'Kylo', 'Breetai', 'Exedor');
welcomeAll('Miriya', 'Breetai', 'Exedor');