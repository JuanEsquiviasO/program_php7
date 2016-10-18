<?php

/**
 * isset
 * determina si una variable esta definida y no es null
 * 
 */
$polo = 'CSS';
// $polo = 'null';
// var_dump(isset($polo));

var_dump(isset($polo) ? $polo : 'Se imprime un mensaje');

//utiliza operador de fusión de null
var_dump($polo ?? 'Se imprime un mensaje');