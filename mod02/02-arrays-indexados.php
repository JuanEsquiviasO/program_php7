<?php

$lenguajes = array('PHP', 'RUBY', 'NODEJS');
var_dump($lenguajes);

$lenguajes = ['PHP', 'RUBY', 'NODEJS'];
var_dump($lenguajes);

//arrary ints
$integers = [3, 6, 9, 12];
var_dump($integers);

//array floats
$floats = [1.30, 0.89, 7.776, 5.78];
var_dump($floats);


//Sets variables
$uno = 1;
$dos = 2;
$tres = 3;

//array variables
$variables = [$uno, $dos, $tres];
var_dump($variables);


//the arrays may contain various types of data
$mixed = ['Polo', $uno, 4, 21.52];
var_dump($mixed);

$html = $lenguajes[0];
var_dump($html);

//If indifined offset
$lenguajeInexistente = $lenguajes[4];