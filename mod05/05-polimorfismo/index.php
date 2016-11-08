<?php

/**
 * Caracteristica o propiedad
 * Un objeto responde de maneras diferentes
 * a un mismo mensaje
 * que sintacticamente es igual.
 *
 * El type-hinting es la garantaría de que los metodos esten presentes.
 */

require_once 'Gato.php';
require_once 'Perro.php';
require_once 'Persona.php';

//Instancias - Animal
$gato = new Gato;
$perro = new Perro;

//Instancias - Cuidador
$persona = new Persona;

//Cuidar los animales
$persona->cuidar($gato);
$persona->cuidar($perro);

