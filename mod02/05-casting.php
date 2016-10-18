<?php

$polos = '4';
var_dump($polos);

//cast interger
$polos = (int) $polos;
var_dump($polos);

//cast float
$polos = (float) $polos;
var_dump($polos);

$polos = 3.1416;
//cast string
$nuevaVariablePolos = (string) $polos;
var_dump($polos);

// arrays caso especial
$nuevaVariablePolos = (array) $nuevaVariablePolos;
var_dump($nuevaVariablePolos);

$polos = 3.58;
$polos = (array) $polos;
var_dump($polos);