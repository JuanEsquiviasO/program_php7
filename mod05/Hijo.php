<?php


require_once 'Padre.php';

class Hijo extends Padre {

	public static $abuelos;

	public function __construct($nombre) 
	{
		$this->nombre = $nombre;
	}

	public static function saludar()
	{
		return 'Hola, yo tengo ' . self::$abuelos . ' abuelos.';
		// echo "Hola.\n";
		// echo $this->cosaPrivada();
		// echo $this->protegido;
	}
}