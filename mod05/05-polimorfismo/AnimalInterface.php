<?php

/**
 * Las interfaces son muy similares a las clases abstractas
 * excepto que no contienen lógica.
 *
 *Son unicamente un conntrato que deben cumplir las clases
 *que heren de ellas.
 * 
 */

interface AnimalInterface {

	public function comer($comida);
	
	public function hablar();

}