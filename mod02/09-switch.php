<?php

/**
 * 
 */

$polo = 'PHP';

switch ($polo) {
  case 'CSS':
    var_dump('Tengo un polo CSS');
    break;

  case 'JS':
    var_dump('Tengo un polo JS');
    break;

  case 'HTML':
    var_dump('Tengo un polo HTML');
    break;

  default:
    var_dump('Ninguno de los casos coincide');
    break;
}
