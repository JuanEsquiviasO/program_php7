<?php

namespace Yale;

class Estudiante {
	
	private $nombre;

	public function __construct($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function saludar()
	{
		return "Hi mi nombre es {$this->nombre} y soy el namespace de Yale";
	}
}