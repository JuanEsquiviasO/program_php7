<?php

/**
 * Clases Abstractas - contratos parciales que contienen métodos abstractos y métodos reales.
 */

abstract class Animal {
	abstract public function hablar();
	public function saludar()
	{
		$hola = $this->hablar() . ' ' . $this->hablar();
		return $hola;
	}
}
