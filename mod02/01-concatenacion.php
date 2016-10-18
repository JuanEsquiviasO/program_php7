<?php

$primero = 'Yo quiero';
$segundo = ' un polo de JS';

//Concatenación
var_dump($primero . $segundo);

//concatenation of several values
$tercero = ' talla M ';
var_dump($primero . $segundo . $tercero . '@');

/**
 * concatenate different types of securities
 * @var float
 */
$cuarto = 20.99;
var_dump($primero . $segundo . $tercero . $cuarto);

/*
In JS + for concatenate while in PHP is different
 */
var_dump($primero + $segundo);

/*
It is good practice not to use strings in math
 */
$primero = '3';
$segundo = '5';
var_dump($primero + $segundo);

