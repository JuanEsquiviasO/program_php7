<?php

/*
Type hinting
 */

function welcome(array $names)
{
  foreach ($names as $name) {
    echo "Hi, {$name}.\n";
  }
}

welcome(['Cucho', 'Benito', 'Demostenes', 'Don Gato',]);
// welcome('Cucho');
// welcome(5);