<?php 

// Define clase producto
class Producto {

  //Declaración de propiedades
  var $nombre;
  var $talla;
  var $precio = 12;

  function __construct($nombre, $talla)
  {
    // echo "He sido construido.\n";
    $this->nombre = $nombre;
    $this->talla = $talla;
  }

  function resumen()
  {
    echo $this->nombre . PHP_EOL;
    echo $this->talla  . PHP_EOL;
    echo $this->precio . PHP_EOL;
  }
}